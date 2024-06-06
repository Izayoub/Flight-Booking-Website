<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('airports')->insert([
            ['iata_code' => 'JFK', 'name' => 'John F. Kennedy International Airport', 'latitude' => 40.6413, 'longitude' => -73.7781],
            ['iata_code' => 'LAX', 'name' => 'Los Angeles International Airport', 'latitude' => 33.9416, 'longitude' => -118.4085]
        ]);
    }
}
