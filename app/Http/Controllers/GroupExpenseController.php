<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Expense;
use Illuminate\Support\Facades\Auth;

class GroupExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!$group->users->contains(Auth::id())) {
            return response()->json(['message' => 'Accès non autorisé'], 403);
        }

        $expenses = $group->expenses()->with('payers', 'splits')->get();
        return response()->json($expenses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Group $group)
    {
        // Vérifier que l'utilisateur appartient au groupe
        if (!$group->users->contains(Auth::id())) {
            return response()->json(['message' => 'Accès non autorisé'], 403);
        }
    
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'description' => 'nullable|string|max:255',
            'payers' => 'required|array',
            'payers.*.user_id' => 'required|exists:users,id',
            'payers.*.paid_amount' => 'required|numeric|min:0',
            'split_type' => 'required|in:equal,custom',
            'splits' => 'required_if:split_type,custom|array',
            'splits.*.user_id' => 'required_if:split_type,custom|exists:users,id',
            'splits.*.share_amount' => 'required_if:split_type,custom|numeric|min:0',
        ]);
    
        $totalPaid = collect($request->payers)->sum('paid_amount');
        if ($totalPaid != $request->amount) {
            return response()->json(['message' => 'La somme des paiements ne correspond pas au montant total'], 400);
        }
    
        $expense = $group->expenses()->create([
            'amount' => $request->amount,
            'description' => $request->description,
        ]);
    
        $payersData = collect($request->payers)->mapWithKeys(function ($payer) {
            return [$payer['user_id'] => ['paid_amount' => $payer['paid_amount']]];
        });
        $expense->payers()->sync($payersData);
    
        if ($request->split_type === 'equal') {
            $members = $group->users;
            $shareAmount = $request->amount / $members->count();
            $splitsData = $members->mapWithKeys(function ($user) use ($shareAmount) {
                return [$user->id => ['share_amount' => $shareAmount]];
            });
            $expense->splits()->sync($splitsData);
        } else {
            $totalShare = collect($request->splits)->sum('share_amount');
            if ($totalShare != $request->amount) {
                $expense->delete();
                return response()->json(['message' => 'La somme des parts ne correspond pas au montant total'], 400);
            }
            $splitsData = collect($request->splits)->mapWithKeys(function ($split) {
                return [$split['user_id'] => ['share_amount' => $split['share_amount']]];
            });
            $expense->splits()->sync($splitsData);
        }
    
        return response()->json(['message' => 'Dépense ajoutée avec succès', 'expense' => $expense->load('payers', 'splits')], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$group->users->contains(Auth::id()) || $expense->group_id !== $group->id) {
            return response()->json(['message' => 'Accès non autorisé'], 403);
        }

        $expense->delete();
        return response()->json(['message' => 'Dépense supprimée avec succès']);
    }
}
