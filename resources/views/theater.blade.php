@extends('layout.yukNonton')

@section('title', 'Theater')

@section('pagetitle', 'Theater List')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <h1>@yield('pagetitle')</h1>
        </div>

        <form action="{{ route('theater.index') }}">
            <div class="input-group my-5">
                <input type="number" class="form-control" placeholder="Search Theater Number" name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>

        <div class="d-md-flex justify-content-md-end">
            <a class="btn btn-success my-2 create" href="{{ route('theater.create') }}">
                <i class="bi bi-plus-lg"></i>&emsp;<strong>Create</strong>
            </a>
        </div>
        <br>

        @if ($theaters->count())
        @foreach ($theaters as $theater)
            <div class="card mb-4">
                <h3><i class="bi bi-camera-reels"></i>&emsp;Theater {{ $theater['nomor_theater'] }}</h1>
                    <hr class="mb-4">
                    <p>
                        <i class="bi bi-list-ul"></i>&emsp;<strong>Tipe: </strong>{{ $theater['tipe'] }}
                    </p>
                    <p>
                        <i class="bi bi-people"></i>&emsp;<strong>Kapasitas: </strong>{{ $theater['kapasitas'] }}
                        Penonton
                    </p>
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('theater.destroy', $theater->nomor_theater) }}" method="POST">
                            <a class="btn btn-info show" href="{{ route('theater.show', $theater->nomor_theater) }}">
                                <i class="bi bi-box-arrow-up-right"></i>&emsp;<strong>Show</strong></a>&emsp;
                            <a class="btn btn-outline-warning edit"
                                href="{{ route('theater.edit', $theater->nomor_theater) }}">
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
            <p class="text-center mt-5">Theater Number Not Found.</p>
        @endif

        <ul class="pagination justify-content-center mt-5">
            {{ $theaters->links() }}
        </ul>

    </div>

@endsection

@section('footer')
