<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'iata_code', 'name', 'latitude', 'longitude',
    ];

    public function departures()
    {
        return $this->hasMany(Flight::class, 'departure_airport_id');
    }

    public function arrivals()
    {
        return $this->hasMany(Flight::class, 'arrival_airport_id');
    }
}
