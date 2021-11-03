<?php

use Carbon\Carbon;
use App\Models\Theater;
use App\Models\NowPlaying;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\NowPlayingController;

//* Home
// Route::get('/', [HomeController::class, 'home']);
Route::get('/', function () {
    return view(
        'home',
        [
            "active_home" => "active",
            "active_theater" => "",
            "active_now_playing" => ""
        ]
    );
});

//* Theater
Route::resource('theater', TheaterController::class);

//* Now Playing Movie
Route::resource('nowplaying', NowPlayingController::class);

// Route::get('', function () {
//     $nowplaying = new NowPlaying();
//     $nowplaying->tanggal = Carbon::now();
//     $nowplaying->jam = '15:00';
//     $nowplaying->durasi = 120;
//     $nowplaying->nama_film = '100';
//     $nowplaying->fk_theater = 1;
//     $nowplaying->save();
// });
