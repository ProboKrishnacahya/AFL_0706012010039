@extends('layout.yukNonton')

@section('title', 'Now Playing')

@section('pagetitle', 'Now Playing List')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1>@yield('pagetitle')</h1>
        </div>

        <div class="input-group my-5">
            <input type="text" class="form-control" placeholder="Search Movie Title" aria-label="Search Movie Title"
                aria-describedby="button-addon2">
            <button class="btn btn-danger" type="button" id="button-addon2">Search</button>
        </div>

        <div class="d-md-flex justify-content-md-end">
            <a class="btn btn-success my-2 create" href="{{ route('now-playing.create') }}">
                <i class="bi bi-plus-lg"></i>&emsp;<strong>Create</strong>
            </a>
        </div>
        <br>

        @foreach ($now_playings as $now_playing)
            <div class="card mb-4">
                <h3><i class="bi bi-asterisk"></i>&emsp;{{ $now_playing['movie_code'] }}</h1>
                    <hr class="mb-4">
                    <p>
                        <i class="bi bi-quote"></i>&emsp;<strong>Judul: </strong>{{ $now_playing['judul'] }}
                    </p>
                    <p>
                        <i class="bi bi-camera-reels"></i>&emsp;<strong>Theater: </strong>
                        <strong>
                            <a href="{{ route('theater.show', $now_playing->theater->nomor_theater) }}">
                                {{ $now_playing->theater->nomor_theater }}
                            </a>
                        </strong>
                    </p>
                    <p>
                        <i class="bi bi-clock"></i>&emsp;<strong>Jam: </strong>{{ $now_playing['jam'] }}
                    </p>
                    <p>
                        <i class="bi bi-play-circle"></i>&emsp;<strong>Durasi: </strong>{{ $now_playing['durasi'] }}
                        menit
                    </p>
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('now-playing.destroy', $now_playing->id_now_playing) }}" method="POST">
                            <a class="btn btn-info show"
                                href="{{ route('now-playing.show', $now_playing->id_now_playing) }}">
                                <i class="bi bi-box-arrow-up-right"></i>&emsp;<strong>Show</strong></a>&emsp;
                            <a class="btn btn-outline-warning edit"
                                href="{{ route('now-playing.edit', $now_playing->id_now_playing) }}">
                                <i class="bi bi-pencil"></i>&emsp;<strong>Edit</strong></a>&nbsp;
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link"
                                onclick="return confirm('Are you sure you want to delete the data?\nThis action cannot be undone!');">
                                <i class="bi bi-trash"></i>&emsp;<strong>Delete</strong>
                            </button>
                        </form>
                    </div>
            </div>
        @endforeach

    </div>

@endsection

@section('footer')
