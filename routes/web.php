<?php

use Illuminate\Support\Facades\Route;
#ez a sor mondja meg, hogy használni akarom az etelController nevű osztályt:
use App\Http\Controllers\etelController;
use App\Http\Controllers\mateController;

Route::get('/', function () {
    return view('welcome');
})->name('fooldal');

#itt ténylegesen meghatározom az url-t
Route::get('/etelek',[etelController::class,"index"])->name('etelek');
Route::get('/mate',[mateController::class,"index"])->name('mate');