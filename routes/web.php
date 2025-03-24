<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'show');
    Route::post('/register', 'register')->name('register');
});
