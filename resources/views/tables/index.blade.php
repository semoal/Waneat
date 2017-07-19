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

    </div>

  </div>
@endsection
