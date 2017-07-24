@extends('layouts.app')
@section('content')

<div class="empty">
  <div class="empty-icon">
    <i class="icon icon-stop"></i>
  </div>
  <h4 class="empty-title">ERROR 404</h4>
  <p class="empty-subtitle">Esta página no esta disponible, lo lamentamos</p>
  <div class="empty-action">
   	<a href="/home">
    <button class="btn btn-primary"> Volver atrás</button>
    </a>
  </div>
</div>
@endsection