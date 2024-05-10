<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Define your routes here

// Dashboard routes

Route::group( ['prefix' => 'admin'], function () {
    Route::get( 'login', [DashboardController::class, 'login'] )->name( 'login' );

    Route::get( 'dashboard', [DashboardController::class, 'dashboard'] )->name( 'dashboard' );
    Route::get( 'users/all', [DashboardController::class, 'users'] )->name( 'users' );
    Route::get( 'users/blocked', [DashboardController::class, 'usersBlocked'] )->name( 'usersBlocked' );
    Route::get( 'ptc', [DashboardController::class, 'ptc'] )->name( 'ptc' );
    Route::get( 'shortlinks', [DashboardController::class, 'shortlinks'] )->name( 'shortlinks' );
    Route::get( 'offerwall', [DashboardController::class, 'offerwall'] )->name( 'offerwall' );
    Route::get( 'faucet', [DashboardController::class, 'faucet'] )->name( 'faucet' );
    Route::get( 'coupon', [DashboardController::class, 'coupon'] )->name( 'coupon' );
    Route::get( 'leaderboard', [DashboardController::class, 'leaderboard'] )->name( 'leaderboard' );
    Route::get( 'deposit', [DashboardController::class, 'deposit'] )->name( 'deposit' );
    Route::get( 'withdrawal', [DashboardController::class, 'withdrawal'] )->name( 'withdrawal' );
    Route::get( 'profile', [DashboardController::class, 'profile'] )->name( 'profile' );
    Route::get( 'paymentSettings', [DashboardController::class, 'paymentSettings'] )->name( 'paymentSettings' );
    Route::get( 'settings', [DashboardController::class, 'settings'] )->name( 'settings' );

    Route::get( 'create', [DashboardController::class, 'create'] )->name( 'create' );
} );