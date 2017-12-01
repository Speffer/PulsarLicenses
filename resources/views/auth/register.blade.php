<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PulsarLicenses Cadastro</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="../public/assets/wizard/steps.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        html{
            background-image:url({{ url('../public/assets/images/office.jpg') }});
            background-size: cover;
            background-repeat: no-repeat
        }
    </style>
</head>
<body>

<div class="valign-wrapper" style="width:100%;height:100%;position: absolute;">
    <div class="valign" style="width:100%;">
        <div class="container">
            <div class="row">
                <div class="col s6 m6 l6 offset-l3">
                    <div class="row" id="validation">
                        <div class="col-12">
                            <div class="card wizard-content" >
                                <div class="card-body brown lighten-5 z-depth-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <h1 class="card-title blue-text text-darken-4">Cadastre-se</h1>
                                            </div>
                                        </div>
                                        <form action="#" class="tab-wizard wizard-circle">
                                            <!-- Step 1 -->
                                            <h6>Dados do Usuário</h6>
                                            <section >
                                                <div class="row">
                                                    <div class="col s12 m12 l12">
                                                        <div class="form-group">
                                                            <label for="nome"> Nome: <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="nome" name="firstName">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m12 l12">
                                                        <div class="form-group">
                                                            <label for="user"> Nome de Usuário : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="user" name="lastName">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m6 l6">
                                                        <div class="form-group">
                                                            <label for="email"> E-mail : <span class="danger">*</span> </label>
                                                            <input type="email" class="form-control required" id="email" name="emailAddress">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l6">
                                                        <div class="form-group">
                                                            <label for="skype">Skype: <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="skype">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m6 l6">
                                                        <div class="form-group">
                                                            <label for="phone">Telefone :</label>
                                                            <input type="number" class="form-control" id="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l6">
                                                        <div class="form-group">
                                                            <label for="celular">Celular: <span class="danger">*</span> </label>
                                                            <input type="number" class="form-control required" id="celular">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m5 l5">
                                                        <div class="form-group">
                                                            <label for="password"> Senha: <span class="danger">*</span> </label>
                                                            <input type="password" class="form-control required" id="password" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m5 l5">
                                                        <div class="form-group">
                                                            <label for="confirm"> Confirmar a senha : <span class="danger">*</span> </label>
                                                            <input type="password" class="form-control required" id="confirm" name="confirm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!-- Step 2 -->
                                            <h6>Dados de Localização</h6>
                                            <section>
                                                <div class="row">
                                                    <div class="col s12 m8 l8">
                                                        <div class="form-group">
                                                            <label for="cep"> Cep : <span class="danger">*</span> </label>
                                                            <input type="number" class="form-control required" id="cep" name="cep">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m6 l6">
                                                        <div class="form-group">
                                                            <label for="estado">Estado :</label>
                                                            <input type="text" class="form-control" id="estado">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l6">
                                                        <div class="form-group">
                                                            <label for="cidader">Cidade: <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="cidader">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m8 l8">
                                                        <div class="form-group">
                                                            <label for="bairro"> Bairro: <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="bairro" name="bairro">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m4 l4">
                                                        <div class="form-group">
                                                            <label for="numero">  Número: <span class="danger">*</span> </label>
                                                            <input type="number" class="form-control required" id="numero" name="numero">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m12 l12">
                                                        <div class="form-group">
                                                            <label for="endereço"> Endereço: <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="endereço" name="endereço">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m12 l12">
                                                        <div class="form-group">
                                                            <label for="complemento"> Complemento : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="complemento" name="complemento">
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!-- Step 3 -->
                                            <h6>Dados da Empresa</h6>
                                            <section>
                                                <div class="row">
                                                    <div class="col s12 m12 l12">
                                                        <div class="form-group">
                                                            <label for="fantasia"> Nome da Empresa(Fantasia): <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="fantasia" name="fantasia">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m12 l12">
                                                        <div class="form-group">
                                                            <label for="cnpj">  CNPJ: <span class="danger">*</span> </label>
                                                            <input type="number" class="form-control required" id="cnpj" name="cnpj">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m6 l6">
                                                        <div class="form-group">
                                                            <label for="juros"> Juros : <span class="danger">*</span> </label>
                                                            <input type="number" class="form-control required" id="numero">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l6">
                                                        <div class="form-group">
                                                            <label for="multa">Multa: <span class="danger">*</span> </label>
                                                            <input type="number" class="form-control required" id="multa">
                                                        </div>
                                                    </div>
                                                </div>

                                            </section>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<div id="user">--}}
                        {{--<nav class="light-blue darken-4">--}}
                            {{--<div class="nav-wrapper">--}}
                                {{--<a href="#" class="brand-logo center">Dados do Usuário</a>--}}
                            {{--</div>--}}
                        {{--</nav>--}}
                        {{----}}
                    {{--</div>--}}

                    {{--<div id="location">--}}
                        {{--<nav class="cyan darken-3">--}}
                            {{--<div class="nav-wrapper">--}}
                                {{--<a href="#" class="brand-logo center">Dados da Localização</a>--}}
                            {{--</div>--}}
                        {{--</nav>--}}
                    {{--</div>--}}

                    {{--<div id="inc">--}}
                        {{--<nav class="indigo darken-3">--}}
                            {{--<div class="nav-wrapper">--}}
                                {{--<a href="#" class="brand-logo center">Dados da Empresa</a>--}}
                            {{--</div>--}}
                        {{--</nav>--}}
                    {{--</div>--}}

                </div>
            </div>
        </div>
    </div>
</div>



</body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="../public/assets/wizard/jquery.steps.min.js"></script>
<script src="../public/assets/wizard/jquery.validate.min.js"></script>
<script src="../public/assets/wizard/steps.js"></script>

<script>

</script>
</html>

{{--<div class="col s12 m6 l6">--}}
    {{--<div class="form-group">--}}
        {{--<label for="ibge">Código IBGE: <span class="danger">*</span> </label>--}}
        {{--<input type="number" class="form-control required" id="ibge">--}}
    {{--</div>--}}
{{--</div>--}}



{{--<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2"> Select City : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control required" id="wlocation2" name="location">
                                                            <option value="">Select City</option>
                                                            <option value="India">India</option>
                                                            <option value="USA">USA</option>
                                                            <option value="Dubai">Dubai</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wdate2">Date of Birth :</label>
                                                        <input type="date" class="form-control" id="wdate2"> </div>
                                                </div>
                                            </div>--}}

 {{--<form action="{{ route('login')}}" method="POST" class="col s10 m10 l10">--}}
                {{--{{ csrf_field() }}--}}
                {{--<div class="row">--}}
                    {{--<div class="input-field col s12 m12 l12">--}}
                        {{--<input type="email" placeholder="Email" id="email" name="email" class="validate {{ $errors->has('email') ? 'has-error' : 'error' }}">--}}
                        {{--@if ($errors->has('email'))--}}
                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="input-field col s12 m12 l12">--}}
                        {{--<input type="password" placeholder="Senha" id="password" name="password" class="validate {{ $errors->has('password') ? 'has-error' : 'error' }}">--}}
                        {{--@if ($errors->has('password'))--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="col s12 m12 l12">--}}
                        {{--<a class="brown-text text-darken-1" href="{{ route('password.request') }}">--}}
                            {{--Esqueceu a senha?--}}
                        {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="col s12 m12 l12">--}}
                        {{--<p>--}}
                            {{--<input type="checkbox" id="test5" name="remember" {{ old('remember') ? 'checked' : '' }}/>--}}
                            {{--<label for="test5" class="cyan-text text-accent-3">Lembrar de mim?</label>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="row">--}}
                    {{--<button class="btn waves-effect cyan darken-3 col s12 m12 l12" type="submit" name="action">Entrar--}}
                        {{--<i class="material-icons right">send</i>--}}
                    {{--</button>--}}
                {{--</div>--}}
            {{--</form>--}}

