@extends('layout.yukNonton')

@section('title', 'Theater')

@section('pagetitle', 'Theater List')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1>@yield('pagetitle')</h1>
        </div>

        <div class="d-md-flex justify-content-md-end">
            <a class="btn btn-success my-2 create" href="{{ route('theater.create') }}">
                <i class="bi bi-plus-lg"></i>&emsp;<strong>Create</strong>
            </a>
        </div>
        <br>


        @foreach ($theaters as $titer)
            <div class="card mb-4">
                <h3><i class="bi bi-camera-reels"></i>&emsp;Theater {{ $titer['nomor'] }}</h1>
                    <hr class="mb-4">
                    <p><i class="bi bi-list-ul"></i>&emsp;<strong>Tipe: </strong>{{ $titer['tipe'] }}</p>
                    <p><i class="bi bi-people-fill"></i>&emsp;<strong>Kapasitas: </strong>{{ $titer['kapasitas'] }} penonton</p>
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('theater.destroy', $titer->id_theater) }}" method="POST">
                            <a class="btn btn-info show" href="{{ route('theater.show', $titer->id_theater) }}">
                                <i class="bi bi-box-arrow-up-right"></i>&emsp;<strong>Show</strong></a>&emsp;
                            <a class="btn btn-outline-warning edit"
                                href="{{ route('theater.edit', $titer->id_theater) }}">
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
