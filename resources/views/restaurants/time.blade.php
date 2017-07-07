<div id="time-template">
  <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
    <label for="time" class="col-md-4 control-label">Dias</label>
    <div class="col-md-6">
        <select id="days" size="7" name="days[]" multiple="multiple" id="lstStates">
            <option value="mon" name="Monday">Lunes</option>
            <option value="tue" name="Tuesday">Martes</option>
            <option value="wed" name="Wednesday">Miercoles</option>
            <option value="thr" name="Thursday">Jueves</option>
            <option value="fri" name="Friday">Viernes</option>
            <option value="sat" name="Saturday">Sabado</option>
            <option value="sun" name="Sunday">Domingo</option>
        </select>
    </div>
  </div>

  <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Apertura: </label>
    <div class="col-md-6">
      <input type="time" id="hour1" name="hour1[]"class="form-control">
    </div>
  </div>

  <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Cierre: </label>
    <div class="col-md-6">
      <input type="time" id="hour2" name="hour2[]" class="form-control">
    </div>
  </div>

  <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
    <div class="col-md-6">
      <a id="more-hours">más horas</a>
    </div>

  </div>
</div>


<input type="number" id="schedules_count" name="schedules_count" value="1" hidden=true>
