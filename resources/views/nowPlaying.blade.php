@extends('layout.yukNonton')

@section('title', 'Now Playing')

@section('pagetitle', 'Now Playing List')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <h1>@yield('pagetitle')</h1>
        </div>

        <form action="{{ route('now-playing.index') }}">
            <div class="input-group my-5">
                <input type="text" class="form-control" placeholder="Search Movie Title" name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>

        <div class="d-md-flex justify-content-md-end">
            <a class="btn btn-success my-2 create" href="{{ route('now-playing.create') }}">
                <i class="bi bi-plus-lg"></i>&emsp;<strong>Create</strong>
            </a>
        </div>
        <br>

        @if ($now_playings->count())
            @foreach ($now_playings as $now_playing)
                <div class="card mb-4">
                    <h3><i class="bi bi-asterisk"></i>&emsp;{{ $now_playing['movie_code'] }}</h1>
                        <hr class="mb-4">
                        <p>
                            <i class="bi bi-quote"></i>&emsp;<strong>Judul: </strong>{{ $now_playing['judul'] }}
                        </p>
                        <p>
                            <i class="bi bi-camera-reels"></i>&emsp;<strong>Theater: </strong>
                            <strong class="fw-bold">
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
                            Menit
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

        @else
            <p class="text-center mt-5">Movie Title Not Found.</p>
        @endif

        <ul class="pagination justify-content-center mt-5">
            {{ $now_playings->links() }}
        </ul>

    </div>

@endsection

@section('footer')
