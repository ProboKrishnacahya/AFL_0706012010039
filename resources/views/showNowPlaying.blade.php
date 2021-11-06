@extends('layout.yukNonton')

@section('title', 'Now Playing | Show')

@section('pagetitle', 'Detail Now Playing')

@section('content')
    <div class="container">
        <div class="card">
            <h1 class="text-center mt-3">@yield('pagetitle') {{ $now_playing['movie_code'] }}</h1>
            <hr class="mb-4">
            <p>
                <i class="bi bi-quote"></i>&emsp;<strong>Judul: </strong>{{ $now_playing['judul'] }}
            </p>
            <p><i class="bi bi-camera-reels"></i>&emsp;<strong>Theater: </strong>
                <strong>
                    <a href="{{ route('theater.show', $now_playing->theater->nomor_theater) }}">
                        {{ $now_playing->theater->nomor_theater }}
                    </a>
                </strong>
            </p>
            <p>
                <i class="bi bi-people"></i>&emsp;<strong>Kapasitas: </strong>{{ $now_playing->theater['kapasitas'] }}
                Penonton
            </p>
            <p>
                <i class="bi bi-clock"></i>&emsp;<strong>Jam: </strong>{{ $now_playing['jam'] }}
            </p>
            <p>
                <i class="bi bi-play-circle"></i>&emsp;<strong>Durasi: </strong>{{ $now_playing['durasi'] }} Menit
            </p>
            <p>
                <i class="bi bi-tag"></i>&emsp;<strong>Genre: </strong>{{ $now_playing['genre'] }}
            </p>
            <p>
                <i class="bi bi-text-left"></i>&emsp;<strong>Deskripsi: </strong>{{ $now_playing['deskripsi'] }}
            </p>
            <p>
                <i class="bi bi-star"></i>&emsp;<strong>Cast: </strong>{{ $now_playing['cast'] }}
            </p>
        </div>
    </div>
@endsection
