<?php

use App\Http\Controllers\WheatherController;
use Illuminate\Support\Facades\Route;




Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get("/home", function (){
    return "Hello World!";
});

Route::get("/about", function (){
    return view("about");
});

Route::get("/prognoza", [WheatherController::class, "index"]);

require __DIR__.'/settings.php';
