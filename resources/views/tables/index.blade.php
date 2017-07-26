@extends('layouts.app')
@section('navbar')
  @include('navbar')
@endsection
@section('content')
  <div class="col-xs-12 tables-select">
        <select class="form-select" id="select-restaurant" form="input-form" name="restaurantId">
        @foreach (Auth::user()->restaurants as $key => $restaurant)
          <option value="{{$restaurant->id}}">{{ $restaurant->name_restaurant}}</option>
        @endforeach
      </select>
      <button class="btn btn-primary" name="button" id="printAll">Imprimir todos</button>
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
              <form id="input-form" method="POST" action="{{route('table.store')}}" role="form">
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
    <div class="abs right-4">
      <!-- Si hay mesas que las muestre -->
      <div class="columns tables-content">
      @forelse ($tables as $table)
            <div class="column">
              <ul class="menu">
                <li class="menu-item">
                  <div class="tile tile-centered">
                    <div class="tile-icon">
<img class="printImage" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(150)->errorCorrection('H')->merge('http://i.imgur.com/kWDi3YO.png', .9, true)->generate('http://localhost:8000/restaurant/'.$table->id_restaurant_id.'?table='.$table->id)) !!} ">
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
                    <button class="btn btn-link delete-table"> Borrar </button>
                  </form>
                </li>
              </ul>
            </div>
      @empty
      <!-- si no hay que diga algo -->
      <h5> No tienes mesas para este restaurante </h5>
      <!-- ./boton -->

      @endforelse
      </div>
    </div>

  </div>
@endsection
