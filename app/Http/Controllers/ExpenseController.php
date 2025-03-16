<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = auth()->user()->expenses;
        return response()->json($expenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'tags' => 'array',
            'tags.*' => 'string'
        ]);
    
        $expense = new Expense;
        $expense->amount = $request->amount;
        $expense->description = $request->description;
        $expense->user_id = auth()->id();
        $expense->save();
    
        if ($request->has('tags')) {
            $tagId = [];
    
            foreach ($request->tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagId[] = $tag->id;
            }
    
            $expense->tags()->sync($tagId);
        }
    
        return response()->json($expense->load('tags'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view',$expense);
        $expense = auth()->user()->expenses()->with('tags')->findOrFail($id);
        return response()->json($expense);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $this->authorize('view', $expense);
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'tags' => 'array',
            'tags.*' => 'string'
        ]);

        $expense = auth()->user()->expenses()->findOrFail($id);
        $expense->amount = $request->amount;
        $expense->description = $request->description;
        $expense->save();

        if($request->tags) {
            $tagIds = [];

            foreach ($request->tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $expense->tags()->sync($tagIds);
        }

        return response()->json($expense->load('tags'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('view',$expense);
        $expense = auth()->user()->expenses()->findOrFail($id);
        $expense->tags()->detach(); 
        $expense->delete();

        return response()->json(['message' => 'Expense deleted successfully']);
    }
}
