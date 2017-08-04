@extends('layouts.app')
@section('navbar')
  @include('navbar')
@endsection
@section('content')
  <div class="right-column column">
      <div id="app">
        <mesas></mesas>
      </div>
  </div>
@endsection
