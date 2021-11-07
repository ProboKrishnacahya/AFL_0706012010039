@extends('layout.yukNonton')

@section('title', 'Theater | Show')

@section('pagetitle', 'Detail Theater')

@section('content')

    <div class="container">
        <div class="card">
            <h1 class="text-center mt-3">@yield('pagetitle') {{ $theater['nomor_theater'] }}</h1>
            <hr class="mb-4">
            <p>
                <i class="bi bi-list-ul"></i>&emsp;<strong>Tipe: </strong>{{ $theater['tipe'] }}
            </p>
            <p>
                <i class="bi bi-people"></i>&emsp;<strong>Kapasitas: </strong>{{ $theater['kapasitas'] }} Penonton
            </p>
        </div>

        <h4 class="mt-5">Now Playing List</h4>
        <br>

        <table class="table table-hover table-dark table-striped table-border border-light">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @php $index = 1 @endphp
                @foreach ($theater->nowPlayings as $now_playing)
                    <tr>
                        <td>{{ $index }}</td>
                        @php $index++ @endphp
                        <td>{{ $now_playing['judul'] }}</td>
                        <td>{{ $now_playing['jam'] }}</td>
                        <td>{{ $now_playing['durasi'] }} Menit</td>
                        <td>{{ $now_playing['deskripsi'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('footer')
