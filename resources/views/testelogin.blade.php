<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PulsarLicenses Login</title>
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
            background-image:url(../public/assets/images/login-register.jpg);
        }
    </style>
</head>
<body>

    <div class="parallax-container">
        {{--<div class="parallax"><img src="../public/assets/images/login-register.jpg"></div>--}}
        <nav class="transparent">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo center"></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="{{ route('register') }}">Cadastro</a></li>
                    <li><a href="badges.html">PP link</a></li>
                </ul>
            </div>
        </nav>
        <div class="col right">
            <div class="row">
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
                                <a class="" href="{{ route('password.request') }}">
                                    Esqueceu a senha?
                                </a>
                            </div>
                            <div class="col s12 m12 l12">
                                <p>
                                    <input type="checkbox" id="test5" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <label for="test5">Lembrar de mim?</label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <button class="btn waves-effect waves-light col" type="submit" name="action">Entrar
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




                {{--<div class="row">--}}
                    {{--<form method="POST" action="{{ route('login')}}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="col s12 m12 l12">--}}
                            {{--<div class="input-field col s6 m6 l6 >--}}
                                {{--<input placeholder="E-mail" id="email" type="email" class="validate" name="email" value="{{ old('email') }}">--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="col s12 md12 l12">--}}
                            {{--<div class="input-field col s6 m6 l6 ">--}}
                                {{--<input placeholder="Senha" id="password" type="password" class="validate" name="password">--}}

                            {{--</div>--}}
                        {{--</div>--}}


                        {{--<div class="col s6 m6 l6">--}}
                            {{--<button class="btn waves-effect waves-light col" type="submit" name="action">Entrar--}}
                                {{--<i class="material-icons right">send</i>--}}
                            {{--</button>--}}



                            {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                {{--Esqueceu a senha?--}}
                            {{--</a>--}}
                        {{--</div>--}}

                    {{--</form>--}}
                {{--</div>--}}

        </div>
    </div>



        {{--<div class="container">--}}
            {{--<h4 class="center">Login</h4>--}}
            {{--<div class="divider"></div>--}}

            {{--<div class="row">--}}
                {{--<form method="POST" action="{{ route('login')}}">--}}
                    {{--{{ csrf_field() }}--}}

                    {{--<div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">--}}
                        {{--<input placeholder="E-mail" id="email" type="email" class="validate" name="email" value="{{ old('email') }}">--}}
                        {{--@if ($errors->has('email'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                        {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">--}}
                        {{--<input placeholder="Senha" id="password" type="password" class="validate" name="password">--}}
                        {{--@if ($errors->has('password'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                        {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="col s12">--}}
                        {{--<button class="btn waves-effect waves-light col" type="submit" name="action">Entrar--}}
                            {{--<i class="material-icons right">send</i>--}}
                        {{--</button>--}}

                        {{--<p class="col s6">--}}
                            {{--<input type="checkbox" id="test5" name="remember" {{ old('remember') ? 'checked' : '' }}/>--}}
                            {{--<label for="test5">Lembrar-se de mim?</label>--}}
                        {{--</p>--}}

                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                            {{--Esqueceu a senha?--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
</body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.parallax').parallax();
    });
</script>
</html>