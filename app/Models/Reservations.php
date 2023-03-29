<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'reservationdate',
        'reservationtime',
        'bowlingalley',
        'helpfences',
        'numberofadults',
        'numberofchildren',
        'openingtime',
        'isactive',
        'note',
        'datecreated',
        'datechanged',
    ];

      /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserId');
    }

}
