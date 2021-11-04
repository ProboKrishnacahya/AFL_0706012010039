@extends('layout.yukNonton')

@section('title', 'Theater')

@section('pagetitle', 'Theater List')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1>@yield('pagetitle')</h1>
        </div>

        <div class="d-md-flex justify-content-md-end">
            <a class="btn btn-success my-2" href="{{ route('theater.create') }}">
                <i class="bi bi-plus-lg"></i>&emsp;Create
            </a>
        </div>
        <br>

        <div class="card bg-black">
            @foreach ($theaters as $titer)
                <h3>Theater {{ $titer['nomor'] }}</h1>
                    <hr class="mb-5">
                    <p><strong>Tipe: </strong>{{ $titer['tipe'] }}</p>
                    <p><strong>Kapasitas: </strong>{{ $titer['kapasitas'] }}</p>
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('theater.destroy', $titer->id_theater) }}" method="POST">
                            <a class="btn btn-info show" href="{{ route('theater.show', $titer->id_theater) }}">
                                <i class="bi bi-box-arrow-up-right"></i>&emsp;Show</a>&emsp;
                            <a class="btn btn-outline-warning edit"
                                href="{{ route('theater.edit', $titer->id_theater) }}">
                                <i class="bi bi-pencil"></i>&emsp;Edit</a>&nbsp;
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link"
                                onclick="return confirm('Are you sure you want to delete the data?\nThis action cannot be undone!');">
                                <i class="bi bi-trash"></i>&emsp;Delete
                            </button>
                        </form>
                    </div>
            @endforeach
        </div>

        {{-- <table class="table text-white mt-4">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Kapasitas</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($theaters as $titer)
                    <tr>
                        <td>{{ $titer['nomor'] }}</td>
                        <td>{{ $titer['tipe'] }}</td>
                        <td>{{ $titer['kapasitas'] }}</td>
                        <td class="text-center">
                            <form action="{{ route('theater.destroy', $titer->id_theater) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('theater.show', $titer->id_theater) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('theater.edit', $titer->id_theater) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
    </div>

@endsection

@section('footer')
