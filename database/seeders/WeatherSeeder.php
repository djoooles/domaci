<?php

namespace Database\Seeders;

use App\Models\WeatherModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prognoza = [
            'Beograd' => 22,
            'Nis' => 25,
            'Kragujevac' => 20,
        ];

        foreach ($prognoza as $city => $temerature)
        {
            WeatherModel::create([
                'city' => $city,
                'temperature' => $temerature,
            ]);
        }
    }
}
