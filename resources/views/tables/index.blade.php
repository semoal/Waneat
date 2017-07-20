@extends('layouts.app')
@section('navbar')
  @include('navbar')
@endsection
@section('content')
  <div class="content-container column col-9">
    <div class="abs" style="top:10%;">
      <select class="form-select" onchange="changeRestaurant()">
        @foreach (Auth::user()->restaurants as $key => $restaurant)
          <option value="{{$restaurant->name_restaurant}}">{{ $restaurant->name_restaurant}}</option>
        @endforeach
      </select>

      <!-- Si hay mesas que las muestre --> 
      <div class="columns">
      @forelse ($tables as $table)
            <div class="column col-xs-12">
              <ul class="menu">
                <li class="menu-item">
                  <div class="tile tile-centered">
                    <div class="tile-icon">
                      <img src="{{ $table->captcha_url}}" onclick="window.print();" class="avatar">
                    </div>
                    <div class="tile-content">
                      {{ $table->title }}
                    </div>
                  </div>
                </li>
                <li class="divider"></li>
                <li class="menu-item">
                  <a href="#" class="active">
                    <button class="btn btn-link"> Imprimir </button>
                  </a>
                </li>
                <li class="menu-item">
                  <form method="POST" action="{{ route('table.destroy',$table->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-link"> Borrar </button>
                  </form>
                </li>
              </ul>
            </div>
      @empty
      <!-- si no, que muestre añadir mesas -->
      <!-- Modal --> 
      <div class="modal model-md" id="tables">
        <a href="#" class="modal-overlay" aria-label="Close"></a>
        <div class="modal-container" role="document">
          <div class="modal-header">
            <a href="#modals" class="btn btn-clear float-right" aria-label="Close"></a>
            <div class="modal-title">
             ¿Cuantas mesas tienes en tu restaurante? 
            </div>
          </div>
          <div class="modal-body">
            <div class="content">
              <form method="POST" action="{{route('table.store')}}" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="form-label">Mesas:</label>
                  <div class="input-group">
                    <button type="button" class="btn btn-primary input-group-btn less-val">-</button>
                    <input type="number" name="valuetables" class="form-input input-tables" placeholder="0" min="0" max="25">
                    <button type="button" class="btn btn-primary input-group-btn more-val">+</button>
                  </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Generar mesas</button>
          </div>
          </form>
        </div>
      </div>
      <!-- ./modal -->

      <!-- boton de abrir modal -->
      <a class="btn btn-default" href="#tables"> Añadir mesas </a>
      <!-- ./boton --> 

      @endforelse
      </div>
    </div>

  </div>
@endsection
