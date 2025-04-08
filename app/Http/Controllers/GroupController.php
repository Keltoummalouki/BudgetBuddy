<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Auth::user()->groups()->with('users')->get();
        return response()->json($groups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'currency' => 'required|string|max:3',
            'members' => 'required|array',
            'members.*' => 'exists:users,id',
        ]);

        $group = Group::create([
            'name' => $request->name,
            'currency' => $request->currency,
        ]);

        $group->users()->sync(array_merge($request->members, [Auth::id()]));

        return response()->json(['message' => 'Groupe créé avec succès', 'group' => $group->load('users')], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $this->authorize('view', $group);
        if (!$group->users->contains(Auth::id())) {
            return response()->json(['message' => 'Accès non autorisé'], 403);
        }

        return response()->json($group->load('users', 'expenses'));
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
    public function destroy(Group $group)
    {
        $this->authorize('delete', $group);
        if (!$group->users->contains(Auth::id())) {
            return response()->json(['message' => 'Accès non autorisé'], 403);
        }

        if ($group->expenses()->exists()) {
            return response()->json(['message' => 'Impossible de supprimer : des dépenses existent'], 400);
        }

        $group->delete();
        return response()->json(['message' => 'Groupe supprimé avec succès']);
    }
}
