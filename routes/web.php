<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ProductKeyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/user', UserController::class)->except(['show']);

Route::resource('/game', GameController::class)->only(['index']);
Route::get('/games/{slug}', [GameController::class, 'show'])
    ->name('game.show');