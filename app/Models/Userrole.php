<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userrole extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserId',
        'Role',
        'IsActive',
        'Note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserId');
    }
}
