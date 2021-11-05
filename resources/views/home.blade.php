@extends('layout.yukNonton')

@section('title', 'YukNonton')

@section('pagetitle', 'Welcome to YukNonton')

@section('content')

    <div class="container">

        <div class="row my-5 py-5">
            <div class="col-md-6">
                <div>
                    <h1>@yield('pagetitle')</h1>
                    <p class="text-white-50 mb-5">Nikmati sensasi menonton film terbaik di <strong>YukNonton</strong>.</p>
                    <br>
                    <a href="theater"><button class="btn btn-danger me-3">Theater</button></a>
                    <a href="now-playing"><button class="btn btn-outline-danger">Now Playing</button></a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
                    alt="Jumbotron" loading="lazy" class="jumbotron-img" />
            </div>
        </div>

        <p>
            <strong>YukNonton</strong> merupakan jasa penayangan film bioskop yang mulai berkiprah
            di industri hiburan sejak tahun 2021. <strong>YukNonton</strong> berkomitmen untuk senantiasa menghadirkan
            pengalaman dan kepuasan menonton yang terbaik bagi masyarakat Indonesia. Selain menyajikan film-film hasil karya anak bangsa, <strong>YukNonton</strong> juga menayangkan film-film
            berkelas dunia yang dibintangi artis-artis ternama dan diolah oleh para kru handal.
        </p>
    </div>

@endsection

@section('footer')
