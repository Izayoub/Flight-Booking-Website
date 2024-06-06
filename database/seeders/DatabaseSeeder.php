<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            AirlinesTableSeeder::class,
            AirportsTableSeeder::class,
            FlightsTableSeeder::class,
            FlightImagesTableSeeder::class,
            ReservationsTableSeeder::class,
            SeatsTableSeeder::class,
            SeatClassesTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
