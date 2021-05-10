<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = collect(['Jakarta', 'Bogor', 'Depok', 'Tanggerang', 'Bekasi', 'Bandung']);
        
        foreach ($cities as $city) {
            City::firstOrCreate(['name' => $city]);
        }
    }
}
