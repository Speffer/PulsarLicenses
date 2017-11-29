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
</head>
<body>
    @yield('content')

    {{--<ul id="slide-out" class="side-nav">--}}
        {{--<li><div class="user-view">--}}
                {{--<div class="background">--}}
                    {{--<img src="images/office.jpg">--}}
                {{--</div>--}}
                {{--<a href="#!user"><img class="circle" src="images/yuna.jpg"></a>--}}
                {{--<a href="#!name"><span class="white-text name">John Doe</span></a>--}}
                {{--<a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>--}}
            {{--</div></li>--}}
        {{--<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>--}}
        {{--<li><a href="#!">Second Link</a></li>--}}
        {{--<li><div class="divider"></div></li>--}}
        {{--<li><a class="subheader">Subheader</a></li>--}}
        {{--<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>--}}
    {{--</ul>--}}
    {{--<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>--}}

    <a class="btn btn primary" href="{{ action('HomeController@quitandodavida') }}">
        Logout
    </a>
</body>
<!--Import jQuery and materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
@yield('js-content')

<script>
    $(".button-collapse").sideNav();
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