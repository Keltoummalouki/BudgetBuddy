<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Resources\ExpenseResource;

class ExpenseController extends Controller
{
    public function index(Request $request)
    {
        $expenses = $request->user()->expenses()->with('tags', 'group')->get();
        return ExpenseResource::collection($expenses);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'amount' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
            'group_id' => 'nullable|exists:groups,id', // Ajout de group_id
            'tags' => 'nullable|array',
            'tags.*' => 'string'
        ]);

        $expense = $request->user()->expenses()->create($data);

        if ($request->filled('tags')) {
            $tagIds = [];
            foreach ($request->tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $expense->tags()->sync($tagIds);
        }

        return new ExpenseResource($expense->load('tags', 'group'));
    }

    public function show(Expense $expense)
    {
        $this->authorize('view', $expense);
        return new ExpenseResource($expense->load('tags', 'group'));
    }

    public function update(Request $request, Expense $expense)
    {
        $this->authorize('update', $expense);

        $data = $request->validate([
            'amount' => 'sometimes|numeric|min:0',
            'description' => 'sometimes|string|max:255',
            'group_id' => 'nullable|exists:groups,id', // Ajout de group_id
            'tags' => 'nullable|array',
            'tags.*' => 'string'
        ]);

        $expense->update($data);

        if ($request->has('tags')) {
            $tagIds = [];
            foreach ($request->tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $expense->tags()->sync($tagIds);
        }

        return new ExpenseResource($expense->load('tags', 'group'));
    }

    public function destroy(Expense $expense)
    {
        $this->authorize('delete', $expense);
        $expense->delete();
        return response()->json(['message' => 'Expense deleted'], 200);
    }
}