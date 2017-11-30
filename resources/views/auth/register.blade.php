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
                            <div class="card wizard-content">
                                <div class="card-body">
                                    <div class="container">
                                        <h2 class="card-title">Cadastre-se</h2>
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
                                                            <input type="tel" class="form-control required" id="skype">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m6 l6">
                                                        <div class="form-group">
                                                            <label for="phone">Telefone :</label>
                                                            <input type="tel" class="form-control" id="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l6">
                                                        <div class="form-group">
                                                            <label for="celular">Celular: <span class="danger">*</span> </label>
                                                            <input type="tel" class="form-control required" id="celular">
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
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="jobTitle2">Company Name :</label>
                                                            <input type="text" class="form-control required" id="jobTitle2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="webUrl3">Company URL :</label>
                                                            <input type="url" class="form-control required" id="webUrl3" name="webUrl3"> </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="shortDescription3">Short Description :</label>
                                                            <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!-- Step 3 -->
                                            <h6>Step 3</h6>
                                            <section>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wint1">Interview For :</label>
                                                            <input type="text" class="form-control required" id="wint1"> </div>
                                                        <div class="form-group">
                                                            <label for="wintType1">Interview Type :</label>
                                                            <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="Banquet">Normal</option>
                                                                <option value="Fund Raiser">Difficult</option>
                                                                <option value="Dinner Party">Hard</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="wLocation1">Location :</label>
                                                            <select class="custom-select form-control required" id="wLocation1" name="wlocation">
                                                                <option value="">Select City</option>
                                                                <option value="India">India</option>
                                                                <option value="USA">USA</option>
                                                                <option value="Dubai">Dubai</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wjobTitle2">Interview Date :</label>
                                                            <input type="date" class="form-control required" id="wjobTitle2">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Requirements :</label>
                                                            <div class="c-inputs-stacked">
                                                                <label class="inline custom-control custom-checkbox block">
                                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Employee</span> </label>
                                                                <label class="inline custom-control custom-checkbox block">
                                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Contract</span> </label>
                                                            </div>
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
<script src="../public/assets/wizard/steps.js"></script>
<script>

</script>
</html>





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

