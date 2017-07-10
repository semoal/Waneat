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
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#more-hours').click(function(){  
              var $foo = $(
                  '<div class="form-group"> <label for="time" class="col-md-4 control-label">Dias</label> <div class="col-md-6"> <select class="days" size="7" name="days[]" multiple="multiple" id="lstStates"> <option value="Lunes" name="Lunes">Lunes</option> <option value="Martes" name="Martes">Martes</option> <option value="Miercoles" name="Miercoles">Miercoles</option> <option value="Jueves" name="Jueves">Jueves</option> <option value="Viernes" name="Viernes">Viernes</option> <option value="Sabado" name="Sabado">Sabado</option> <option value="Domingo" name="Domingo">Domingo</option> </select> </div></div><div class="form-group"> <label class="col-md-4 control-label">Apertura: </label> <div class="col-md-6"> <input type="time" id="hour1" name="hour1[]"class="form-control"> </div></div><div class="form-group"> <label class="col-md-4 control-label">Cierre: </label> <div class="col-md-6"> <input type="time" id="hour2" name="hour2[]" class="form-control"> </div></div><hr>'
                );
              $("#time-template").append($foo.clone());
            });
        });
       </script>
   </body>
</html>
