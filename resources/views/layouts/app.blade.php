<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Waneat') }}</title>
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/spectre.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/spectre-exp.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/spectre-icons.min.css') }}" />

</head>
   <body>
    <div class="container-fluid">
        <div class="row">
        @yield('navbar')
        </div>
        @yield('content')
    </div>
      <!-- Scripts -->
      <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
      <script src="{{ asset('js/app.js') }}"></script>


   </body>
</html>
