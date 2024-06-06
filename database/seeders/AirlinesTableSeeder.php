<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('airlines')->insert([
            ['name' => 'Airline One', 'iata_code' => 'AO', 'logo' => 'airline_one_logo.png'],
            ['name' => 'Airline Two', 'iata_code' => 'AT', 'logo' => 'airline_two_logo.png']
        ]);
    }
}
