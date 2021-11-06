@extends('layout.yukNonton')

@section('title', 'Now Playing | Show')

@section('pagetitle', 'Detail Now Playing')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center mb-3">@yield('pagetitle') {{ $now_playing['movie_code'] }}</h1>
            <p><b>Judul: </b>{{ $now_playing['judul'] }}</p>
            <p><b>Theater: </b>{{ $now_playing['nomor_theater'] }}</p>
            <p><b>Kapasitas: </b>{{ $now_playing->theater['kapasitas'] }}</p>
            <p><b>Jam: </b>{{ $now_playing['jam'] }}</p>
            <p><b>Durasi: </b>{{ $now_playing['durasi'] }}</p>
            <p><b>Genre: </b>{{ $now_playing['genre'] }}</p>
            <p><b>Deskripsi: </b>{{ $now_playing['deskripsi'] }}</p>
            <p><b>Cast: </b>{{ $now_playing['cast'] }}</p>
        </div>
    </div>
@endsection
