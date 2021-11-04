@extends('layout.yukNonton')

@section('title', 'Theater')

@section('pagetitle', 'YukNonton Theater')

@section('content')

    <div class="container">
        <div class="row justify-content-center text-white">
            <h1>Create New Theater</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('theater.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nomor: </label>
                        <input type="text" class="form-control" name="nomor" required>
                    </div>
                    <div class="form-group">
                        <label>Tipe: </label>
                        <input type="text" class="form-control" name="tipe" required>
                    </div>
                    <div class="form-group">
                        <label>Kapasitas: </label>
                        <input type="text" class="form-control" name="kapasitas" required>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection

@section('footer')
