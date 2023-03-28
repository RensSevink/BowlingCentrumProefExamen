<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // fillable array is nodig om de velden te kunnen vullen
    protected $fillable = [
        'ReservationId',
        'Food',
        'Drinks',
        'Price',
        'IsActive',
        'Note',
    ];

    // function om de relatie met de tabel reservations te maken
    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'ReservationId');
    }
}
