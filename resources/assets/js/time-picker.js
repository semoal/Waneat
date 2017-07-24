


$(document).ready(function(){
        //Permite añadir horarios duplicados
        var schedules = 0;
        $('#more-hours').click(function(){
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
        });

        $('.remove-schedule').click(function(e){
          $(".time-inner:last-child").remove()
          e.event
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


        $(function () {

          $('.restaurant-toggle').click(function() {
            var link = $(this).attr('data-link');
            $("#restaurant-content").load(link);
            // $("#myModal").addClass('active');
          });


        });



        $(function () {
          // Multiple images preview in browser
          var imagesPreview = function imagesPreview(input, placeToInsertImagePreview) {
            if (input.files) {
              var filesAmount = input.files.length;
              for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function (event) {
                  var template = '<div class="img-container"><img class="img-responsive" src="'+event.target.result+'"></div>';
                  $(template).appendTo(placeToInsertImagePreview);
                };
                reader.readAsDataURL(input.files[i]);
              }
            }
          };
          $('#gallery-photo-add').on('change', function () {
            imagesPreview(this, 'div.gallery');
          });
        });

        //Insertamos la cantidad de mesas que el usuario diga
        var valueInput = 0;
        $('.more-val').on('click', function(){
          if (valueInput>=25) {
            console.log('Valor demasiado grande');
          }else{
            valueInput++;
            $('.input-tables').val(valueInput);
          }
        });
        $('.less-val').on('click', function(){
          if (valueInput<=0) {
            console.log('Valor demasiado pequeño');
          }else{
            valueInput--;
            $('.input-tables').val(valueInput);
          }
        });

      $('.printImage').on('click', function(){
        var  popup = window.open(); // display popup
        popup.document.write("<img src='"+this.src+"' />"); // This is where the image url goes which will just open up the image
        setTimeout(function(){ popup.print(); }, 1000);
      });

      $('#printAll').on('click', function(){
        var popup = window.open();
        var tables = document.getElementsByClassName('printImage');
        console.log(tables);
        for (var i = 0; i < tables.length; i++) {
          $(popup.document.body).append("<div style='position:relative;display:inline-block;'><img src='"+tables[i].src+"' /><div style='position:absolute;bottom:0;left:50%;transform:translateX(-50%);'>Mesa "+(i+1)+"</div></div>");
          // $("<img src='"+tables[i].src+"' />").appendTo(popup.document.body);
          // $("<span style='position:absolute;top:100%;>Mesa "+(i+1)+"</span>").appendTo(popup.document.body);
        }
        setTimeout(function(){ popup.print(); }, 3000);
      });


});
