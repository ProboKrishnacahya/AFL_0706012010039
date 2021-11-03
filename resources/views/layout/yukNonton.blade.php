<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- External CSS public/assets/css/style.css --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;800&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="icon" href="{{ url('assets/img/favicon.ico?v=2') }}" type="image/ico" />

    {{-- Title --}}
    <title>@yield("title")</title>
</head>

<body class="bg-dark text-white">
    <div id="app">
        {{-- Header --}}
        <nav class="navbar navbar-expand-md bg-black user-select-none">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('assets/img/logo.png') }}" alt="Logo" class="pe-2"><strong>YukNonton</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ $active_home ?? '' }}" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active_theater ?? '' }}" href="/theater">Theater</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active_nowplaying ?? '' }}" href="/now-playing">Now Playing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Content --}}
        <main class="py-3">
            @yield('content')
        </main>

        {{-- Footer --}}
        <nav class="navbar fixed-bottom bg-black text-white py-3 justify-content-center user-select-none">
            &copy; 2021<a href="/">&nbsp;<strong>YukNonton</strong></a>
        </nav>
    </div>
</body>

</html>
