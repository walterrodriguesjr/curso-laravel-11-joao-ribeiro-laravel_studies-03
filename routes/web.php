<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');

Route::get('/index', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

//ROUTE PARAMETERS 
Route::get('/valores/{value1}/{value2}', [MainController::class, 'mostrarValores']);

//ROUTE CONSTRAINTS 
Route::get('/exp1/{value}', function($value){
    echo $value;
})->where('value', '[0-9]+');
