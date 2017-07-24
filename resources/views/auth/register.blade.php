@extends('layouts.app')

@section('content')
@include('navbar')
<div class="docs-contens col-9 col-sm-12">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="col-4" style="top:10%;">
                    <form role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="form-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-input" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nif') ? ' has-error' : '' }}">
                            <label for="name" class="form-label">NIF</label>
                            <div class="col-md-6">
                                <input id="nif" type="text" class="form-input" name="nif" value="{{ old('nif') }}" required autofocus>

                                @if ($errors->has('nif'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nif') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                            <label for="contact_phone" class="form-label">Telefono contacto</label>

                            <div class="col-md-6">
                                <input id="contact_phone" type="text" class="form-input" name="contact_phone" value="{{ old('contact_phone') }}" required>

                                @if ($errors->has('contact_phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contact_phone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="form-label">Dirección</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-input" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="form-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="form-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-input" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="form-label">Confirma contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registro
                                </button>
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


