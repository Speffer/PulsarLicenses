@extends('layouts.app')

@section('content')
@section('content')
    <div class="container">
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
@endsection

