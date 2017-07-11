


$(document).ready(function(){
        //Permite añadir horarios duplicados
        var schedules = 0;
        $('#more-hours').click(function(){
        schedules++;
          var $foo = $(
              '<div id="time-template"> <div class="form-group"> <label for="time" class="col-md-4 control-label">Dias</label> <div class="col-md-6"> <label> <input type="checkbox" name="days['+schedules+'][]" value="Lunes"> <span class="day-box">Lun</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Martes"> <span class="day-box">Mar</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Miercoles"> <span class="day-box">Mié</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Jueves"> <span class="day-box">Jue</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Viernes"> <span class="day-box">Vie</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Sabado"> <span class="day-box">Sáb</span> </label> <label> <input type="checkbox" name="days['+schedules+'][]" value="Domingo"> <span class="day-box">Dom</span> </label> </div></div><div class="form-group"> <label class="col-md-4 control-label">Apertura: </label> <div class="col-md-6"> <input type="time" id="hour1" name="hour1[]"class="form-control"> </div></div><div class="form-group"> <label class="col-md-4 control-label">Cierre: </label> <div class="col-md-6"> <input type="time" id="hour2" name="hour2[]" class="form-control"> <hr></div></div></div>'
            );
          $("#time-template").append($foo);
        });

        //Navegación entre paneles en el registro de restaurantes
          $('.panel-1-next').click(function(){
            $('.panel-1').addClass('hide');
            $('.panel-2').removeClass('hide');
          });
          $('.panel-2-back').click(function(){
            $('.panel-2').addClass('hide');
            $('.panel-1').removeClass('hide');
          });
          $('.panel-2-next').click(function(){
            $('.panel-2').addClass('hide');
            $('.panel-3').removeClass('hide');
          });
          $('.panel-3-back').click(function(){
            $('.panel-3').addClass('hide');
            $('.panel-2').removeClass('hide');
          });
          $('.panel-3-next').click(function(){
            $('.panel-3').addClass('hide');
            $('.panel-4').removeClass('hide');
          });
          $('.panel-4-back').click(function(){
            $('.panel-4').addClass('hide');
            $('.panel-3').removeClass('hide');
          });

        // Funcion para previsualiazr la imagen //
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgPreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".imgInp").change(function(){
            readURL(this);
        });
});
