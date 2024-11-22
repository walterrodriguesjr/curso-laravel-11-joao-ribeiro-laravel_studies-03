<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    echo "Blade Layouts";
});

Route::get('/home', [MainController::class, 'showPage'])->name('showPage');

