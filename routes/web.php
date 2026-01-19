<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ProductKeyController;
use App\Http\Controllers\UserController;
use App\Models\Offer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $offers = Offer::with(['game', 'platform'])
        ->where('is_active', true)
        ->latest()
        ->take(8)
        ->get();
    
    return view('welcome', compact('offers'));
});

Route::resource('/user', UserController::class)->except(['show']);

Route::resource('/game', GameController::class)->only(['index']);
Route::get('/games/{slug}', [GameController::class, 'show'])
    ->name('game.show');