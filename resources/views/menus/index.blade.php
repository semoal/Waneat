@extends('layouts.app')

@section('navbar')
  @include('navbar')
@endsection

@section('content')
  <div class="right-column column">
      <div id="app">
        <menus></menus>
      </div>
  </div>
@endsection
