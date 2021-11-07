@extends('layout.yukNonton')

@section('title', 'Now Playing | Create')

@section('pagetitle', 'Create New Now Playing Data')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">@yield('pagetitle')</h1>

            <!-- Content Row -->
            <div class="container">
                <div class="card mt-5">
                    <form action="{{ route('now-playing.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="form-group d-grid">
                            <label>Theater</label>
                            <select name="nomor_theater" class="custom-select">
                                @foreach ($theaters as $theater)
                                    <option value="{{ $theater['nomor_theater'] }}">{{ $theater['nomor_theater'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jam</label>
                            <input type="time" class="form-control" name="jam" required>
                        </div>
                        <div class="form-group">
                            <label>Durasi</label>
                            <input type="number" class="form-control" name="durasi" required>
                        </div>
                        <div class="form-group d-grid">
                            <label>Genre</label>
                            <select name="genre" class="custom-select">
                                <option value="Action">Action</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Crime">Crime</option>
                                <option value="Drama">Drama</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="History">History</option>
                                <option value="Horror">Horror</option>
                                <option value="Mystery">Mystery</option>
                                <option value="Romance">Romance</option>
                                <option value="Sci-Fi">Sci-Fi</option>
                                <option value="Thriller">Thriller</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast</label>
                            <input type="text" class="form-control" name="cast" required>
                        </div>
                        {{-- <div class="form-group">
                        <label>Poster</label>
                        <input type="image" class="form-control" name="poster">
                    </div> --}}
                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-send"></i>&emsp;Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('footer')
