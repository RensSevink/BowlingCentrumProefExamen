<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'Firstname',
        'Infix',
        'Lastname',
        'Password',
        'IsActive',
        'Note',
    ];

    public function userroles()
    {
        return $this->hasOne(Userrole::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
