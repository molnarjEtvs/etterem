<?php

use Illuminate\Support\Facades\Route;
#ez a sor mondja meg, hogy használni akarom az etelController nevű osztályt:
use App\Http\Controllers\etelController;
use App\Http\Controllers\balintController;

use App\Http\Controllers\mateController;
use App\Http\Controllers\ViviController;
use App\Http\Controllers\mundoController;
use App\Http\Controllers\diaController;
use App\Http\Controllers\martinController;


Route::get('/', function () {
    return view('welcome');
})->name('fooldal');

Route::get('/martin', function () {
    return view('welcome');
})->name('fooldal');

#itt ténylegesen meghatározom az url-t
Route::get('/etelek',[etelController::class,"index"])->name('etelek');
Route::get('/varga',[balintController::class,"index"])->name('varga');
Route::get('/mate',[mateController::class,"index"])->name('mate');

Route::get('/vivi',[ViviController::class,"index"])->name('vivi');

Route::get('/mundo',[mundoController::class,"index"])->name('mundo');

Route::get('/dia',[diaController::class,"index"])->name('dia');
Route::get('/martin',[etelController::class,"index"])->name('martin');
