<h2>Representante</h2>
<div class="control-group">
  <label class="control-label" for="represent[nombres]">Nombres</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id='represent[nombres]' name='represent[nombres]' value='<?= $represent['nombres']?>' placeholder="nombres">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="represent[apellidos]">Apellidos</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id="represent[apellidos]" id="represent[apellidos]" value='<?= $represent['apellidos']?>' placeholder="Apellidos">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="represent[cedula]">Cédula</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id="represent[cedula]" id="represent[cedula]" value='<?= $represent['cedula']?>' placeholder="Cédula">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="represent[parentesco]">Parentesco</label>
  <div class="controls">
    <select class="input-xlarge" type="number" id="represent[parentesco]" id="represent[parentesco]">
      <option value='1'> Madre </option>
      <option value='2'> Padre </option>
      <option value='2'> Otro </option>
    </select>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="represent[telefono_local]">Télefono local</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id="represent[telefono_local]" id="represent[telefono_local]" value='<?= $represent['telefono_local']?>' placeholder="Cédula">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="represent[telefono_celular]">Télefono Celular</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id="represent[telefono_celular]" id="represent[telefono_celular]" value='<?= $represent['telefono_celular']?>' placeholder="Cédula">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="represent[fecha_nacimiento]">Fecha de Nacimiento</label>
  <div class="controls">
    <input class="input-xlarge" class='datepicker' type="text" id="represent[fecha_nacimiento]" id="represent[fecha_nacimiento]" value='<?= $represent['fecha_nacimiento']?>' placeholder="Fecha de Nacimiento">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="represent[observaciones]">Observaciones</label>
  <div class="controls">
    <textarea class="input-xlarge" id="represent[observaciones]" id="represent[observaciones]"> </textarea>
  </div>
</div>