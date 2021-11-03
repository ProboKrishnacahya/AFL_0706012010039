<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//* Home
// Route::get('/', [HomeController::class, 'home']);
Route::get('/', function () {
    return view(
        'home',
        [
            "active_home" => "active",
            "active_theater" => "",
            "active_nowplaying" => ""
        ]
    );
});

//* Theater
Route::resource('theater', TheaterController::class);

//* Now Playing Movie
Route::resource('nowplaying', NowPlayingController::class);
