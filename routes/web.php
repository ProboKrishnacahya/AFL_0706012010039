<?php

use Carbon\Carbon;
use App\Models\Theater;
use App\Models\NowPlaying;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NowPlayingController;
use App\Http\Controllers\TheaterController;

//* Home
Route::get('/', [HomeController::class, 'home']);

//* Now Playing Movie
Route::resource('now-playing', NowPlayingController::class);

//* Theater
Route::resource('theater', TheaterController::class);

// Route::get('test', function () {
//     $theater = Theater::factory()->create();
//     dd($theater);
// });
