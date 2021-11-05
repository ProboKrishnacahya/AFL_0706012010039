@extends('layout.yukNonton')

@section('title', 'Theater | Create')

@section('pagetitle', 'Create New Theater Data')

@section('content')

    <div class="container">
        <div class="row justify-content-center text-white">
            <h1>@yield('pagetitle')</h1>

            <!-- Content Row -->
            <div class="card mt-3">
                <form action="{{ route('theater.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nomor</label>
                        <input type="number" class="form-control" name="nomor" required>
                    </div>
                    {{-- <div class="form-group">
                        <label>Tipe</label>
                        <input type="text" class="form-control" name="tipe" required>
                    </div> --}}
                    <div class="form-group d-grid">
                        <label>Tipe</label>
                    <select name="tipe" class="custom-select">
                        <option value="Regular">Regular</option>
                        <option value="Premiere">Premiere</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Kapasitas</label>
                        <input type="number" class="form-control" name="kapasitas" required>
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
                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i></i>&emsp;Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection

@section('footer')
