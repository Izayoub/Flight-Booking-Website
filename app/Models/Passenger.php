<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'class',
        'baggage',
        'flight_id'
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
