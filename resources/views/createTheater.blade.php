@extends('layout.yukNonton')

@section('title', 'Theater | Create')

@section('pagetitle', 'Create New Theater Data')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">@yield('pagetitle')</h1>

            <!-- Content Row -->
            <div class="container">
                <div class="card mt-5">
                    <form action="{{ route('theater.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nomor</label>
                            <input type="number" class="form-control" name="nomor_theater" required>
                        </div>
                        <div class="form-group row">
                            <label for="tipe">Tipe</label>
                            <div class="form-check col-3 ms-3">
                                <input class="form-check-input custom-radio" type="radio" value="Regular" name="tipe"
                                    checked>
                                Regular
                            </div>
                            <div class="form-check col-3">
                                <input class="form-check-input custom-radio" type="radio" value="Premiere" name="tipe">
                                Premiere
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kapasitas</label>
                            <input type="number" class="form-control" name="kapasitas" required>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-5 pt-3 justify-content-between">
                                    @foreach ($errors->all() as $error)<i
                                            class="bi bi-exclamation-circle"></i>&emsp;{{ $error }}
                                    @endforeach
                            </div>
                        @endif
                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary"><i
                                    class="bi bi-send"></i></i>&emsp;Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('footer')
