<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('seat_classes')->insert([
            ['name' => 'Economy', 'description' => 'Economy class seats'],
            ['name' => 'Business', 'description' => 'Business class seats']
        ]);
    }
}
