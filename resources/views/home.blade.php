
@extends('layouts.app')

@section('navbar')
@include('navbar')
@endsection

@section('content')

<div class="docs-content column col-9 col-sm-12 open-main-padding" id="main">
  <div class="nav-res">
    <div id="app">
      <res></res>
    </div>
  </div>
  <div class="container rel" id="#modals">
    <div class="abs" style="top: 30%; left: 0;">
      <div class="container">
        <div class="columns">
          <div class="col-6">
            <button type="button" class="btn btn-primary toggle-nav-res"> Nav </button>
          </div>
          <div class="col-6">
            <div class="dropdown float-left">
              @if(session()->has('message'))
              <div class="alert alert-success">
                {{ session()->get('message') }}
              </div>
              @endif
              <a href="#" onclick="javascript:return false;" class="btn dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Restaurantes
               <i class="caret fa fa-caret-down"></i>
             </a>
             <ul class="dropdown-menu menu">
               @forelse ($restaurants as $key => $r)
               <li class="menu-item">
                <a data-link={{ route('restaurant.show',$r->id)}} class="restaurant-toggle btn btn-default">{{$r->name_restaurant}}</a>
              </li>
              <li class="divider"></li>
              @empty
              No tienes restaurantes añadidos
              @endforelse
            </ul>
          </div>
        </div>
        <div class="col-6">
          <a class="btn" href={{ route('restaurant.index') }}>Añadir Restaurante</a>
        </div>
      </div>
    </div>
  </div>
  <header class="text-center">
    <h3>
      <a href="#introduction" class="anchor" aria-hidden="true">#</a>Introducción a Waneat
    </h3>
  </header>
  <div class="notes">
    <p><strong>Waneat</strong> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

</div>

<div id="restaurant-content" class="restaurant-content">

</div>
</div>
<!-- cierra el navbar -->
</div>
</div>
<!-- ./cierra el navbar -->
@endsection
