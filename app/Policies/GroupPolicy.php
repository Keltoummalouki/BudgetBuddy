<?php

namespace App\Policies;

use App\Models\Group;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GroupPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Group $group)
    {
        return $group->users->contains($user->id);
    }

    public function delete(User $user, Group $group)
    {
        return $group->users->contains($user->id);
    }
}