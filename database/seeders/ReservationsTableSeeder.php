<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('reservations')->insert([
            ['user_id' => 1, 'flight_id' => 1, 'seat_id' => 1, 'price' => 299.99],
            ['user_id' => 2, 'flight_id' => 2, 'seat_id' => 2, 'price' => 399.99]
        ]);
    }
}
