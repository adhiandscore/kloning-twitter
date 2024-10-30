<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;

// feed
Route::get('/feed', [FeedController::class, 'index']);

// profile
Route::get(
    '/profile',
    [ProfileController::class, 'index']
);

// login
Route::get('/login', [loginController::class, 'index']);

Route::get('/', [DashboardController::class, 'index']);

Route::get('/terms', [TermsController::class, 'index']);

Route::get('/setting', [SettingController::class, 'index']);

Route::get('/explore', [ExploreController::class, 'index']);


