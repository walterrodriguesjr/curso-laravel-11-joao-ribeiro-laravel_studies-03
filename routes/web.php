<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/init', [MainController::class, 'initMethod'])->name('init');
Route::get('/view', [MainController::class, 'viewPage'])->name('view');

Route::get('/single', SingleActionController::class)->name('single');

Route::resource('users', UserController::class);

Route::resources([
    'clients' => ClientsController::class,
    'products' => ProductsController::class
]);
