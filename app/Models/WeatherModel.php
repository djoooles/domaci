<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class WeatherModel extends Model
{
    protected $table = "weather";
    protected $fillable = [
        "city","temperature"
    ];
}
