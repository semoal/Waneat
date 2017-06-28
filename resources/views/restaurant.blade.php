@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Añadir restaurante</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('restaurant.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name_restaurant') ? ' has-error' : '' }}">
                            <label for="name_restaurant" class="col-md-4 control-label">Nombre restaurante</label>

                            <div class="col-md-6">
                                <input id="name_restaurant" type="text" placeholder="" class="form-control" name="name_restaurant" required autofocus>

                                @if ($errors->has('name_restaurant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_restaurant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- boton submit-->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Insertar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @forelse ($restaurant as $user)
                    <li>{{ $user->name_restaurant }}</li>
                @empty
                    <p>No users</p>
                @endforelse

            </div>
        </div>
    </div>
</div>
@endsection
