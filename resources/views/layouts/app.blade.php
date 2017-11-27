<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PulsarLicenses Login</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo center">Pulsar Licenses</a>
            <ul class="left hide-on-med-and-down">
                <li><a href="{{ route('register') }}">Cadastro</a></li>
                <li><a href="badges.html">PP link</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')


    {{--@if (Route::has('login'))--}}
    {{--<div class="top-right links">--}}
    {{--@auth--}}
    {{--<a href="{{ url('/home') }}">Home</a>--}}
    {{--@else--}}
    {{--<a href="{{ route('login') }}">Login</a>--}}
    {{--<a href="{{ route('register') }}">Register</a>--}}
    {{--@endauth--}}
    {{--</div>--}}
    {{--@endif--}}
</div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</html>