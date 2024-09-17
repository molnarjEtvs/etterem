<?php

use Illuminate\Support\Facades\Route;
#ez a sor mondja meg, hogy használni akarom az etelController nevű osztályt:
use App\Http\Controllers\etelController;

Route::get('/', function () {
    return view('welcome');
});

#itt ténylegesen meghatározom az url-t
Route::get('/etelek',[etelController::class,"index"]);