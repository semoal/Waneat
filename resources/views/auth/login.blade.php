@extends('layouts.app')

@section('content')
@include('navbar')
    <div class="docs-contens col-9 col-sm-12">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="abs" style="top:10%;">
                        <form class="form" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="form-label">Correo o NIF</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" placeholder="Correo o NIF" class="form-input" name="email" value="{{ old('email') }}" required autofocus>

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
                                    <i class="form-icon"></i> Recuerdame
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
    </div>
<!-- cierra el navbar -->
</div>
</div>
<!-- ./cierra el navbar -->

@endsection

