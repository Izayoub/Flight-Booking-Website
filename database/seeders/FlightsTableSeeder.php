<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('flights')->insert([
            ['flight_number' => 'AA123', 'departure_airport_id' => 1, 'arrival_airport_id' => 2, 'departure_time' => '2024-06-01 08:00:00', 'arrival_time' => '2024-06-01 11:00:00'],
            ['flight_number' => 'AA456', 'departure_airport_id' => 2, 'arrival_airport_id' => 1, 'departure_time' => '2024-06-01 14:00:00', 'arrival_time' => '2024-06-01 17:00:00']
        ]);
    }
}
