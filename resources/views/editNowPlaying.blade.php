@extends('layout.yukNonton')

@section('title', 'Now Playing | Edit')

@section('pagetitle', 'Edit Existing Now Playing Data')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">@yield('pagetitle')</h1>

            <!-- Content Row -->
            <div class="container">
                <div class="card mt-5">
                    <form action="{{ route('now-playing.update', $now_playing->id_now_playing) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{ $now_playing->judul }}"
                                required>
                        </div>
                        <div class="form-group d-grid">
                            <label>Theater</label>
                            <select name="nomor_theater" class="custom-select">
                                @foreach ($theaters as $theater)
                                    <option
                                        {{ $now_playing['nomor_theater'] == $theater['nomor_theater'] ? 'selected' : '' }}
                                        value="{{ $theater['nomor_theater'] }}">{{ $theater['nomor_theater'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group d-grid">
                            <label>Jam</label>
                            <input type="time" class="form-control" name="jam" value="{{ $now_playing->jam }}" required>
                        </div>
                        <div class="form-group">
                            <label>Durasi</label>
                            <input type="number" class="form-control" name="durasi" value="{{ $now_playing->durasi }}"
                                required>
                        </div>
                        <div class="form-group d-grid">
                            <label>Genre</label>
                            <select name="genre" class="custom-select">
                                <option {{ $now_playing['genre'] == 'Action' ? 'selected' : '' }} value="Action">Action
                                </option>
                                <option {{ $now_playing['genre'] == 'Adventure' ? 'selected' : '' }} value="Adventure">
                                    Adventure
                                </option>
                                <option {{ $now_playing['genre'] == 'Comedy' ? 'selected' : '' }} value="Comedy">Comedy
                                </option>
                                <option {{ $now_playing['genre'] == 'Crime' ? 'selected' : '' }} value="Crime">Crime
                                </option>
                                <option {{ $now_playing['genre'] == 'Drama' ? 'selected' : '' }} value="Drama">Drama
                                </option>
                                <option {{ $now_playing['genre'] == 'Fantasy' ? 'selected' : '' }} value="Fantasy">
                                    Fantasy
                                </option>
                                <option {{ $now_playing['genre'] == 'History' ? 'selected' : '' }} value="History">
                                    History
                                </option>
                                <option {{ $now_playing['genre'] == 'Horror' ? 'selected' : '' }} value="Horror">Horror
                                </option>
                                <option {{ $now_playing['genre'] == 'Mystery' ? 'selected' : '' }} value="Mystery">
                                    Mystery
                                </option>
                                <option {{ $now_playing['genre'] == 'Romance' ? 'selected' : '' }} value="Romance">
                                    Romance</option>
                                <option {{ $now_playing['genre'] == 'Sci-Fi' ? 'selected' : '' }} value="Sci-Fi">Sci-Fi
                                </option>
                                <option {{ $now_playing['genre'] == 'Thriller' ? 'selected' : '' }} value="Thriller">
                                    Thriller</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"
                                required>{{ $now_playing['deskripsi'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast</label>
                            <input type="text" class="form-control" name="cast" value="{{ $now_playing->cast }}"
                                required>
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
