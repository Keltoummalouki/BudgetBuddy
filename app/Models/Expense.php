<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['amount', 'description', 'user_id', 'group_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'expense_tag');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function payers()
    {
        return $this->belongsToMany(User::class, 'expense_payers')->withPivot('paid_amount');
    }

    public function splits()
    {
        return $this->belongsToMany(User::class, 'expense_splits')->withPivot('share_amount');
    }
}
