<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste Login</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        html{
            background-image:url(../public/assets/images/cup-of-coffee.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>

    {{--<div class="carousel carousel-slider">--}}
        {{--<a class="carousel-item" href="#one!"><img src="{{ url('../public/assets/images/address-book.jpg') }})"></a>--}}
        {{--<a class="carousel-item" href="#two!"><img src="{{ url('../public/assets/images/coder.jpg') }}"></a>--}}
        {{--<a class="carousel-item" href="#three!"><img src="{{ url('../public/assets/images/cup-of-coffee.jpg') }}"></a>--}}
        {{--<a class="carousel-item" href="#five!"><img src="{{ url('../public/assets/images/home-office.jpg') }}"></a>--}}
        {{--<a class="carousel-item" href="#six!"><img src="{{ url('../public/assets/images/laptop.jpg') }}"></a>--}}
        {{--<a class="carousel-item" href="#seven!"><img src="{{ url('../public/assets/images/office.jpg') }}"></a>--}}
        {{--<a class="carousel-item" href="#eight!"><img src="{{ url('../public/assets/images/office2.jpg') }}"></a>--}}
        {{--<a class="carousel-item" href="#nine!"><img src="{{ url('../public/assets/images/people.jpg') }}"></a>--}}

    {{--</div>--}}

    <nav class="transparent">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo center"></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="{{ route('register') }}">Cadastro</a></li>
                <li><a href="badges.html">PP link</a></li>
            </ul>
        </div>
    </nav>


    <div class="row right">
            <div class="col s8 m8 l8 right">
                <h4 class="center white-text">PulsarLicenses</h4>
                <div class="divider"></div>
                <form action="{{ route('login')}}" method="POST" class="col s10 m10 l10">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12 m12 l12 {{ $errors->has('email') ? 'has-error' : '' }} ">
                            <input type="email" placeholder="Email" id="email" name="email" class="validate">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-field col s12 m12 l12 {{ $errors->has('password') ? 'has-error' : '' }}">
                            <input type="password" placeholder="Senha" id="password" name="password" class="validate">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col s12 m12 l12">
                            <a class="brown-text text-darken-1" href="{{ route('password.request') }}">
                                Esqueceu a senha?
                            </a>
                        </div>
                        <div class="col s12 m12 l12">
                            <p>
                                <input type="checkbox" id="test5" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                <label for="test5" class="cyan-text text-accent-3">Lembrar de mim?</label>
                            </p>
                        </div>
                    </div>
                    <button class="btn waves-effect cyan darken-3 col s12 m12 l12" type="submit" name="action">Entrar
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>

    </div>

</body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
//    $(document).ready(function(){
//        $('.carousel').carousel();
//        $('.carousel').carousel('next');
//        $('.carousel.carousel-slider').carousel({fullWidth: true});
//    });
</script>
</html>