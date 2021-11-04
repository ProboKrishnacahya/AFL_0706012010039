@extends('layout.yukNonton')

@section('title', 'Detail Theater')

@section('pagetitle', 'Show Theater')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1 class="mb-3">Detail Theater {{ $theater['nomor'] }}</h1>
            <p><strong>Tipe: </strong>{{ $theater['tipe'] }}</p>
            <p><strong>Kapasitas: </strong>{{ $theater['kapasitas'] }}</p>

            <h4 class="mt-5">List Now Playing</h4>
            <br>

            <table class="table table-hover table-dark table-striped table-border border-light mt-3">
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
