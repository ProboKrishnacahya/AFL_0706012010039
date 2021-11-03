@extends('layout.yukNonton')

@section('title', 'Theater')

@section('pagetitle', 'YukNonton Theater')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1>Theater</h1>
        </div>

        <div class="text-right">
            <a class="btn btn-success pull-right" href="{{ route('theater.create') }}">
                <i class="fas fa-arrow-alt-circle-right"></i> Create Theater</a>
        </div>

        <table class="table text-white">
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
                            <form action="{{route('theater.destroy', $titer->id_theater)}}" method="POST">
                                <a class="btn btn-info" href="{{ route('theater.show', $titer->id_theater) }}">Show</a>
                                <a class="btn btn-primary"
                                    href="{{ route('theater.edit', $titer->id_theater) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('footer')
