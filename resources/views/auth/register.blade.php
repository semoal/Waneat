@extends('layouts.app')

@section('content')
<div class="all">
    <div class="panel-grey">
      <div class="logo">
        <h2 class="bold"> Waneat </h2>
    </div>
    <div class="inputlar">
        <form role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <input id="name" type="text" placeholder="Nombre" value="{{ old('name') }}" name="name" required >

            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif



            <input id="nif" type="text" placeholder="DNI" name="nif" value="{{ old('nif') }}" required autofocus>

            @if ($errors->has('nif'))
            <span class="help-block">
                <strong>{{ $errors->first('nif') }}</strong>
            </span>
            @endif


            <input id="contact_phone" type="text" placeholder="Número de contacto"  name="contact_phone" value="{{ old('contact_phone') }}" required>

            @if ($errors->has('contact_phone'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_phone') }}</strong>
            </span>
            @endif


            <input id="address" type="text" placeholder="Dirección" name="address" value="{{ old('address') }}" required>

            @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
            @endif

            <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif



            <input id="password" type="password" placeholder="Contraseña" name="password" required>

            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif


            <input id="password-confirm" type="password" placeholder="Confirma la contraseña" name="password_confirmation" required>
        </div>
        <div class="buttons">
            <button type="submit">Registrarse</button>
        </div>
    </form>
    <div class="oryantal">
        <div class="kayit">
         <a href="/">  Volver atrás </a>
     </div>
 </div>

</div>
<div class="panel-grey pad">
    <div class="carousel" style="height:60px;background-color: white">
        <input type="radio" id="slide-1" name="carousel-radio" hidden="" class="carousel-locator" checked="">
        <input type="radio" id="slide-2" name="carousel-radio" hidden="" class="carousel-locator">
        <input type="radio" id="slide-3" name="carousel-radio" hidden="" class="carousel-locator">
        <input type="radio" id="slide-4" name="carousel-radio" hidden="" class="carousel-locator">
        <div class="carousel-container">
          <figure class="carousel-item">
            <label class="item-prev btn btn-action btn-lg" for="slide-4">
              <i class="icon icon-arrow-left"></i>
          </label>
          <label class="item-next btn btn-action btn-lg" for="slide-2">
              <i class="icon icon-arrow-right"></i>
          </label>
          <p> Waneat es una aplicación enfocada a los restaurantes</p>
      </figure>

      <figure class="carousel-item">
        <label class="item-prev btn btn-action btn-lg" for="slide-1">
          <i class="icon icon-arrow-left"></i>
      </label>
      <label class="item-next btn btn-action btn-lg" for="slide-3">
          <i class="icon icon-arrow-right"></i>
      </label>
      <p> Podrás gestionar tus pedidos directamente desde aquí </p>
  </figure>

  <figure class="carousel-item">
    <label class="item-prev btn btn-action btn-lg" for="slide-2">
      <i class="icon icon-arrow-left"></i>
  </label>
  <label class="item-next btn btn-action btn-lg" for="slide-4">
      <i class="icon icon-arrow-right"></i>
  </label>
  <p> Una app multiplataforma para todos tus clientes </p>
</figure>

<figure class="carousel-item">
    <label class="item-prev btn btn-action btn-lg" for="slide-3">
      <i class="icon icon-arrow-left"></i>
  </label>
  <label class="item-next btn btn-action btn-lg" for="slide-1">
      <i class="icon icon-arrow-right"></i>
  </label>
  <p> Tus clientes podrán pedir a traves de códigos KR </p>
</figure>
</div>
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



