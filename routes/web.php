<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


//Define your routes here






// Dashboard routes

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [DashboardController::class, 'login'])->name('login');

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});