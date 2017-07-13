<div id="time-template">
  <div class="time-inner">
    <div class="form-group">
    <div class="col-md-6" style="padding-top:20px;">
      <h3 for="time" class="text-centered">Dias
      <button type="button" class="btn btn-primary remove-schedule float-right">
          <i class="icon icon-delete"></i>
      </button>
      <button type="button" id="more-hours" class="btn btn-default add-schedule float-right">
          <i class="icon icon-plus"></i>
      </button></h3>
    </div>
    <div class="">
          <label>
            <input type="checkbox" name="days[0][]" value="Lunes">
            <span class="day-box">Lun</span>
          </label>
          -
          <label>
            <input type="checkbox" name="days[0][]" value="Martes">
            <span class="day-box">Mar</span>
          </label>
          -
          <label>
            <input type="checkbox" name="days[0][]" value="Miercoles">
            <span class="day-box">Mié</span>
          </label>
          -
          <label>
            <input type="checkbox" name="days[0][]" value="Jueves">
            <span class="day-box">Jue</span>
          </label>
          -
          <label>
            <input type="checkbox" name="days[0][]" value="Viernes">
            <span class="day-box">Vie</span>
          </label>
          <label>
          -
            <input type="checkbox" name="days[0][]" value="Sabado">
            <span class="day-box">Sáb</span>
          </label>
          -
          <label>
            <input type="checkbox" name="days[0][]" value="Domingo">
            <span class="day-box">Dom</span>
          </label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label">Apertura: </label>
      <div class="col-md-6">
        <input type="time" id="hour1" name="hour1[]"class="form-control">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label">Cierre: </label>
      <div class="col-md-6">
        <input type="time" id="hour2" name="hour2[]" class="form-control">
        <div class="divider"> </div>
      </div>
    </div>
  </div>
</div>
