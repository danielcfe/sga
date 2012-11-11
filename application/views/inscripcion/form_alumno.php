<h2>Datos del alumno</h2>

<div class="control-group">
  <label class="control-label" for="alumno[nombres]">Nombres</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id='alumno[nombres]' name='alumno[nombres]' placeholder="nombres" value='<?= $estudiante['nombres']?>'>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="alumno[apellidos]">Apellidos</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id="alumno[apellidos]" id="alumno[apellidos]" placeholder="Apellidos" value='<?= $estudiante['apellidos']?>'>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="alumno[sexo]">Sexo</label>
  <div class="controls">
    <select class="input-xlarge" type="number" id="alumno[sexo]" id="alumno[sexo]">
      <option value='0'> Masculino </option>
      <option value='1'> Femenino </option>
    </select>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="alumno[edad]">Edad</label>
  <div class="controls">
    <input class="input-xlarge" type="number" id="alumno[edad]" id="alumno[edad]" placeholder="Edad" value='<?= $estudiante['edad']?>'>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="alumno[lugar_nacimiento]">Lugar De Nacimiento</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id="alumno[lugar_nacimiento]" id="alumno[lugar_nacimiento]" placeholder="Lugar De Nacimiento" value='<?= $estudiante['lugar_nacimiento']?>'>
  </div>
</div>
 <div class="control-group">
  <label class="control-label" for="alumno[cedula]">Cédula</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id="alumno[cedula]" id="alumno[cedula]" placeholder="Cédula" value='<?= $estudiante['cedula']?>'>
  </div>
</div>

 <div class="control-group">
  <label class="control-label" for="alumno[fecha_nacimiento]">Fecha de Nacimiento</label>
  <div class="controls">
    <input class="input-xlarge" class='datepicker' type="text" id="alumno[fecha_nacimiento]" id="alumno[fecha_nacimiento]" placeholder="Fecha de Nacimiento" value='<?= $estudiante['fecha_nacimiento']?>'>
  </div>
</div>
 <div class="control-group">
  <label class="control-label" for="alumno[observaciones]">Dirección</label>
  <div class="controls">
    <textarea class="input-xlarge" id="alumno[observaciones]" id="alumno[observaciones]"> </textarea>
  </div>
</div>