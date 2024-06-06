<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('seats')->insert([
            ['flight_id' => 1, 'seat_class_id' => 1, 'seat_number' => '1A', 'availability' => 1],
            ['flight_id' => 2, 'seat_class_id' => 2, 'seat_number' => '2B', 'availability' => 1]
        ]);
    }
}
