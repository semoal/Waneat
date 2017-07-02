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
      <!-- multiselect -->
      <link rel="stylesheet" href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css">
</head>
   <body>
    <div class="container-fluid">
        <div class="row">
        @yield('navbar')
        </div>
        @yield('content')
    </div>
      <!-- Scripts -->
      <script src="http://cdn.alloyui.com/3.0.1/aui/aui-min.js"></script>
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"></script>

   </body>
</html>
