@extends('layouts.app')
@section('content')
<div class="all">
    <div class="panel-grey">
        <div class="logo">
            <img src="{{URL::asset('./images/logo2.png')}}">
        </div>
        <div class="inputlar">
            <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <input type="text" name="email" placeholder="Correo o NIF" required />
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                <input type="password" name="password" required placeholder="Contraseña" />
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                <label class="form-checkbox">
                    <input type="checkbox">
                    <i class="form-icon"></i> Recuerdame
                </label>
            </div>
            <div class="buttons">
                <button type="submit">Iniciar sesión</button>
            </div>
        </form>
        <div class="oryantal"></div>
        <div class="kayit">
            ¿No tienes cuenta? <a href="{{ route('register') }}"> Registrate </a>
        </div>
    </div>
    <div class="panel-grey pad">
        <a href="#example-modal-1">¿Has olvidado la contraseña?</a>
    </div>
    <div class="column">
        <div class="modal" id="example-modal-1">
            <a href="#modals" class="modal-overlay" aria-label="Close"></a>
            <div class="modal-container" role="document">
                <div class="modal-header">
                    <a href="#modals" class="btn btn-clear float-right" aria-label="Close"></a>
                    <div class="modal-title">Reset contraseña</div>
                </div>
                <div class="modal-body">
                    <div class="content">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" placeholder="Correo electronico" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">
                    Enviar correo de restablecer
                    </button>
                </div>
                                        </form>

            </div>
        </div>
    </div>
    <div class="center pad">
        <div class="centered"> Descarga la aplicación </div>
        <img style="width:150px;" src="{{URL::asset('./images/ios.png')}}" alt="#">
        <img style="width:150px;" src="{{URL::asset('./images/android.png')}}" alt="#">
    </div>
</div>
<style type="text/css">
body{
background:#fafafa;
margin:0;
padding:0;
}
*{
font-family: "proxima-nova",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
}
.panel-grey{
background:#ffffff;
border: 1px solid #e6e6e6;
width:350px;
border-radius:3px;
margin-bottom:10px;
text-align:center;
padding:5px;
}
.center{
width:350px;
border-radius:3px;
margin-bottom:10px;
text-align:center;
padding:5px;
}
.all{
width:350px;
position:relative;
left:50%;
margin-left:-175px;
margin-top:25px;
}
.inputlar{
width:270px;
margin:auto;
}
.inputlar input{
width: 250px;
padding:10px;
border: 1px solid #dbdbdb;
border-radius: 3px;
margin-top:7px;
outline:0;
color:#262626;
}
.inputlar input:focus{
border:1px solid #aaa;
}
.buttons{
width:270px;
margin:auto;
}
.buttons button{
width: 100%;
outline:0;
font-size:14px;
margin-top:15px;
margin-bottom:25px;
padding:10px;
font-weight:bold;
color:#fff;
background:#3f4eba;
border:none;
border-radius:3px;
}
button:hover{
cursor: pointer;
}
.logo {
margin:auto;
width:270px;
text-align:center;
}
.logo img{
width:60%;
margin-top:20px;
}
.oryantal{
width:270px;
margin:auto;
border-bottom:1px solid #c7c7c7;
margin-bottom:15px;
}
.kayit{
width:270px;
margin:auto;
text-align:center;
color:#262626;
font-size:13px;
margin-bottom:15px;
}
a{
text-decoration:none;
color:#333;
}
.pad{
padding:20px 5px;
}
</style>
@endsection