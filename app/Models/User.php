<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_user');
    }
}