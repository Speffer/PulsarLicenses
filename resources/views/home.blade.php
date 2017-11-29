<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PulsarLicenses</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    @yield('css-content')

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <style>

    </style>
</head>
<body>
    <header>
        @include('layouts.menu')

        <nav class="light-blue darken-3">
            <div class="nav-wrapper">
                <ul class="left hide-on-med-and-down">
                    {{--SideNav Trigger--}}
                    <li><a href="#" data-activates="slide-out" class="collapse left"><i class="material-icons">menu</i></a></li>
                </ul>

                <a href="#!" class="brand-logo center">PulsarLicenses</a>

                <ul class="right hide-on-med-and-down">
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Logout?<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="row center-align">
            @yield('content')
            <a class="btn btn primary" href="{{ action('HomeController@quitandodavida') }}">
                Logout
            </a>
        </div>
    </main>

    <footer class="page-footer indigo lighten-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

</body>
<!--Import jQuery and materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
@yield('js-content')

<script>

    $( document ).ready(function(){
        $(".dropdown-button").dropdown();
        $(".collapse").sideNav({
            menuWidth: 300, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true, // Choose whether you can drag to open on touch screens,
//        onOpen: function(el) { /* Do Stuff* / }, // A function to be called when sideNav is opened
//        onClose: function(el) { /* Do Stuff* / }, // A function to be called when sideNav is closed
        });
    })

</script>
</html>






{{--<div class="panel-body">--}}
    {{--@if (session('status'))--}}
        {{--<div class="alert alert-success">--}}
            {{--{{ session('status') }}--}}
        {{--</div>--}}
    {{--@endif--}}

    {{--You are logged in!--}}
{{--</div>--}}