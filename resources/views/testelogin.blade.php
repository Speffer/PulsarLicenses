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
</head>
<body>
    <div class="col s10 m10 l10">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo center">Pulsar Licenses</a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="{{ route('register') }}">Cadastro</a></li>
                    <li><a href="badges.html">PP link</a></li>
                </ul>
            </div>
        </nav>

        <div class="parallax-container">
            <div class="parallax"><img src="../public/assets/images/login-register.jpg"></div>

            <div class="section white">
                <div class="container offset-by-6">
                    <h4 class="center">Login</h4>
                    <div class="divider"></div>

                    <div class="row">
                        <form method="POST" action="{{ route('login')}}">
                            {{ csrf_field() }}

                            <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input placeholder="E-mail" id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                                @endif
                            </div>

                            <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input placeholder="Senha" id="password" type="password" class="validate" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                                @endif
                            </div>

                            <div class="col s12">
                                <button class="btn waves-effect waves-light col" type="submit" name="action">Entrar
                                    <i class="material-icons right">send</i>
                                </button>

                                <p class="col s6">
                                    <input type="checkbox" id="test5" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <label for="test5">Lembrar-se de mim?</label>
                                </p>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu a senha?
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
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
    </div>
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