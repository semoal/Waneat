<div id="time-template">
  <div class="form-group">
    <label for="time" class="col-md-4 control-label">Dias</label>
    <div class="col-md-6">
        <select class="days" size="7" name="days[]" multiple="multiple" id="lstStates">
            <option value="Lunes" name="Lunes">Lunes</option>
            <option value="Martes" name="Martes">Martes</option>
            <option value="Miercoles" name="Miercoles">Miercoles</option>
            <option value="Jueves" name="Jueves">Jueves</option>
            <option value="Viernes" name="Viernes">Viernes</option>
            <option value="Sabado" name="Sabado">Sabado</option>
            <option value="Domingo" name="Domingo">Domingo</option>
        </select>
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
    </div>
  </div>
  <hr>
</div>
<div class="form-group">
  <div class="col-md-6 control-label">
    <a id="more-hours">Añadir más horarios...</a>
  </div>
</div>

