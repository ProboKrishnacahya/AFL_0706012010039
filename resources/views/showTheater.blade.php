@extends('layout.yukNonton')

@section('title', 'Theater | Show')

@section('pagetitle', 'Detail Theater')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center mb-3">@yield('pagetitle') {{ $theater['nomor_theater'] }}</h1>
            <p>
                <strong>Tipe: </strong>{{ $theater['tipe'] }}
            </p>
            <p>
                <strong>Kapasitas: </strong>{{ $theater['kapasitas'] }} penonton
            </p>

            <h4 class="mt-5">Now Playing List</h4>
            <br>

            <div class="container">
                <table class="table table-hover table-dark table-striped table-border border-light mt-3">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">Judul</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = 1 @endphp
                        @foreach ($theater->nowPlayings as $now_playing)
                            <tr>
                                <th scope="row">{{ $index }}</th>
                                @php $index++ @endphp
                                <td>{{ $now_playing['jam'] }}</td>
                                <td>{{ $now_playing['durasi'] }}</td>
                                <td>{{ $now_playing['judul'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('footer')
