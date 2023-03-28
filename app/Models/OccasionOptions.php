<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccasionOptions extends Model
{
    use HasFactory;

    // fillable array is nodig om de velden te kunnen vullen
    protected $fillable = [
        'OrderId',
        'TypeOfOccasion',
        'IsActive',
        'Note',
    ];
    
    // function om de relatie met de tabel orders te maken
    public function order()
    {
        return $this->belongsTo(Order::class, 'OrderId');
    }
}
