@extends('layout.yukNonton')

@section('title', 'Detail Theater')

@section('pagetitle', 'Show Theater')

@section('content')

    <div class="container">
        <div class="row justify-content-center text-white">
            <h1>Detail Theater {{ $theater['id_theater'] }}</h1>
            <p><b>Tipe: </b>{{ $theater['tipe'] }}</p>
            <p><b>Kapasitas: </b>{{ $theater['kapasitas'] }}</p>

            <br>
            <b>List Now Playing</b>
            <br>

            <table class="table text-white">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Durasi</th>
                        <th scope="col">Judul</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 1 @endphp
                @foreach ($theater->nowPlayings as $nawpleying)
                    <tr>
                        <th scope="row">{{ $index }}</th>
                        @php $index++ @endphp
                        <td>{{ $nawpleying['tanggal'] }}</td>
                        <td>{{ $nawpleying['jam'] }}</td>
                        <td>{{ $nawpleying['durasi'] }}</td>
                        <td>{{ $nawpleying['judul'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('footer')
