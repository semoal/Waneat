@extends('layouts.app')
@section('navbar')
  @include('navbar')
@endsection
@section('content')
  <div class="col-xs-12 tables-select">
      <div id="app">
        <mesas></mesas>
      </div>
  </div>
@endsection
