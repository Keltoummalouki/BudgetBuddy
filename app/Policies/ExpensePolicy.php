<?php

namespace App\Policies;

use App\Models\Expense;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExpensePolicy
{
    use HandlesAuthorization;

    public function view(User $user, Expense $expense)
    {
        return $user->id === $expense->user_id;
    }

    public function update(User $user, Expense $expense)
    {
        return $user->id === $expense->user_id;
    }

    public function delete(User $user, Expense $expense)
    {
        return $user->id === $expense->user_id;
    }
}