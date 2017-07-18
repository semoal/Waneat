@extends('layouts.app')
@section('navbar')
  @include('navbar')
@endsection
@section('content')
  <div class="content-container column col-9">
    <div class="abs" style="top:30%;">
      <select class="form-select" onchange="changeRestaurant()">
        @foreach (Auth::user()->restaurants as $key => $restaurant)
          <option value="{{$restaurant->name_restaurant}}">{{ $restaurant->name_restaurant}}</option>
        @endforeach
      </select>

      {{-- <div class="panel">
        <div class="panel-header">
          <div class="panel-title">Comments</div>
        </div>
        <div class="panel-nav">
          <!-- navigation components: tabs, breadcrumbs or pagination -->
        </div>
        <div class="panel-body">
          <!-- contents -->
        </div>
        <div class="panel-footer">
          <!-- buttons or inputs -->
        </div>
      </div> --}}
    </div>

  </div>
@endsection
