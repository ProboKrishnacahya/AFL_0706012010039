<?php

use Carbon\Carbon;
use App\Models\Theater;
use App\Models\NowPlaying;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\NowPlayingController;

//* Home
Route::get('/', [HomeController::class, 'home']);

//* Theater
Route::resource('theater', TheaterController::class);

//* Now Playing Movie
Route::resource('nowplaying', NowPlayingController::class);

// Route::get('test', function () {
//     $theater = Theater::factory()->create();
//     dd($theater);
// });
