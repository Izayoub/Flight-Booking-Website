<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('flight_images')->insert([
            ['flight_id' => 1, 'path' => 'flight1_image1.png', 'description' => 'Image 1 for flight 1'],
            ['flight_id' => 2, 'path' => 'flight2_image1.png', 'description' => 'Image 1 for flight 2']
        ]);
    }
}
