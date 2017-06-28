@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Has iniciado sesión! <br>
                    @if (Auth::check())
                        Nombre: {{ Auth::user()->name}} <br>
                        Nif: {{ Auth::user()->nif}} <br>
                        ID: {{ Auth::user()->id}} <br>
                        Email: {{ Auth::user()->email}} <br>

                    @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
