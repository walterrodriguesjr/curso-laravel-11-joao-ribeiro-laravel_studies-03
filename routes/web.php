<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\OnlyAdmin;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('/index', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

//ROUTE PARAMETERS 
Route::get('/valores/{value1}/{value2}', [MainController::class, 'mostrarValores']);

//ROUTE CONSTRAINTS 
Route::get('/exp1/{value}', function ($value) {
    echo $value;
})->where('value', '[0-9]+');

//ROUTE NAMES 
Route::get('/rota_abc', function () {
    return 'Rota nomeada';
})->name('rota_nomeada');

Route::get('/rota_referenciada', function () {
    return redirect()->route('rota_nomeada');
});

//PREFIX 
Route::prefix('/admin')->group(function () {
    Route::get('/home', [MainController::class, 'index']);
    Route::get('/about', [MainController::class, 'about']);
    Route::get('/management', [MainController::class, 'mostrarValor']);
});

Route::get('/admin/only', function(){
    echo "Apenas administradores";
})->middleware([OnlyAdmin::class]);

Route::controller(UserController::class)->group(function(){
    Route::get('/user/new', 'new');
    Route::get('/user/edit', 'edit');
    Route::get('/user/delete', 'delete');
});

