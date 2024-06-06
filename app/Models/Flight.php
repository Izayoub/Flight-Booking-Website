<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_number',
        'departure_airport_id',
        'arrival_airport_id',
        'id_airline',
        'departure_time',
        'arrival_time',

        'price',
    ];
    protected $casts = [
        'departure_time' => 'datetime',
        'arrival_time' => 'datetime',
    ];

    public function getDurationAttribute()
    {
        $departureTime = Carbon::parse($this->departure_time);
        $arrivalTime = Carbon::parse($this->arrival_time);

        // Calcul de la différence en heures
        $duration = $departureTime->diffInHours($arrivalTime);

        return $duration;
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class, 'id_airline');
    }

    public function departureAirport()
    {
        return $this->belongsTo(Airport::class, 'departure_airport_id');
    }

    public function arrivalAirport()
    {
        return $this->belongsTo(Airport::class, 'arrival_airport_id');
    }
    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }
}
