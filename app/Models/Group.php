<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kambing1',
        'kambing2'
    ];

    public function members()
    {
        return $this->hasManyThrough(User::class, GroupMember::class);
    }
}
