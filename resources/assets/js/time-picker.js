


$(document).ready(function(){
        //Permite añadir horarios duplicados
        var schedules = 1;
        var maxiumRemoves = 1;
        var maxiumInserts = 7;

        $('#more-hours').click(function(){
          if(schedules<maxiumInserts){
            schedules++;
            var $foo = $(
                '<div class="time-inner"> <div class="form-group"> <div class="col-md-6"> '+
                '<label> <input type="checkbox" name="days['+schedules+'][]" value="Lunes">'+
                '<span class="day-box">Lun</span> </label> - <label> <input type="checkbox" name="days['+schedules+'][]" value="Martes"> <span class="day-box">Mar</span> </label> - <label> <input type="checkbox" name="days['+schedules+'][]" value="Miercoles">'+
                '<span class="day-box">Mié</span> </label> - <label> <input type="checkbox" name="days['+schedules+'][]" value="Jueves"> <span class="day-box">Jue</span> </label> - <label> <input type="checkbox" name="days['+schedules+'][]" value="Viernes"> '+
                '<span class="day-box">Vie</span> </label> - <label> <input type="checkbox" name="days['+schedules+'][]" value="Sabado"> <span class="day-box">Sáb</span> </label> - <label> <input type="checkbox" name="days['+schedules+'][]" value="Domingo">'+
                '<span class="day-box">Dom</span> </label> </div></div><div class="form-group"> <label class="col-md-4 control-label">Apertura: </label> <div class="col-md-6"> <input type="time" id="hour1" name="hour1[]"class="form-control"> </div></div>'+
                '<div class="form-group"> <label class="col-md-4 control-label">Cierre: </label> <div class="col-md-6"> <input type="time" id="hour2" name="hour2[]" class="form-control"> <div class="divider"> </div> </div></div></div>'
              );
            $("#time-template").append($foo);
          }else{
            console.log("Maximo de dias usado");
          }
        });


        $('.remove-schedule').click(function(e){
          if(schedules>maxiumRemoves){
            schedules--;
            $(".time-inner:last-child").remove();
          }else{
            console.log("Menor que 0"+schedules);
          }
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
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img class="img-preview">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#gallery-photo-add').on('change', function() {
                imagesPreview(this, 'div.gallery');
            });
        });
});
