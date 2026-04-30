<?php

namespace App\Http\Controllers;

class WeatherController extends Controller
{
    public function index()
    {
        $prognoza = [
            'Beograd' => 22,
            'Nis' => 25,
            'Kragujevac' => 20,
        ];

        return view('weather', compact('prognoza'));
    }
}
