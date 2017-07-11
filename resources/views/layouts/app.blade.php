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
      <style media="screen">
      .day-box{
        background: white;
        color: black;
        border-radius: 0.1em;
        user-select: none;
      }
      .day-box:hover{
        cursor: pointer;
      }

      label input[type="checkbox"]{
        display: none;
      }

      label input[type="checkbox"]:checked ~ .day-box{
        background-color:black;
        color:white;
      }

      .not-select{
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
      }

      </style>
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
          var schedules = 0;
          $('#more-hours').click(function(){
            schedules++;
              var $foo = $(
                  '<div id="time-template"> <div class="form-group"> <label for="time" class="col-md-4 control-label">Dias</label> <div class="col-md-6"> <label> <input type="checkbox" name="days['+schedules+'][]" value="Lunes"> <span class="day-box">Lun</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Martes"> <span class="day-box">Mar</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Miercoles"> <span class="day-box">Mié</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Jueves"> <span class="day-box">Jue</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Viernes"> <span class="day-box">Vie</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Sabado"> <span class="day-box">Sáb</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Domingo"> <span class="day-box">Dom</span> </label> </div></div><div class="form-group"> <label class="col-md-4 control-label">Apertura: </label> <div class="col-md-6"> <input type="time" id="hour1" name="hour1[]"class="form-control"> </div></div><div class="form-group"> <label class="col-md-4 control-label">Cierre: </label> <div class="col-md-6"> <input type="time" id="hour2" name="hour2[]" class="form-control"> </div></div><hr></div>'
                );
              $("#time-template").append($foo);
              multiselectFunction();
            });
        });
       </script>
   </body>
</html>
