@extends('layouts.app')

@section('content')
<div class="container">
    <div class="column">
        <div class="panel panel-default">
            <div class="panel-heading">Iniciar sesión</div>
            <div class="panel-body">
                <form class="form" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="form-label">Usuario o NIF</label>

                        <div class="col-md-6">
                            <input id="email" type="text" placeholder="Usuario, nif o Email" class="form-input" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class=" form-label">Contraseña</label>
                        <input id="password" placeholder="Contraseña" type="password" class="form-input" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">

                                <label class="form-checkbox">
                    <input type="checkbox">
                    <i class="form-icon"></i> Remember me
                  </label>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Iniciar sesión
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                ¿Has olvidado tu contraseña?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
