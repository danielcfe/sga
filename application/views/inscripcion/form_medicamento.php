<div class="control-group">
  <label class="control-label" for="medicamento[nombre]">Nombre</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id='medicamento[nombre]' name='medicamento[nombre]' value='<?= $medicina['nombre']?>'placeholder="nombre">
    <input type='hidden' id='medicamento[id]' name='medicamento[id]'>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="medicamento[dosis]">Dosis</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id="medicamento[dosis]" id="medicamento[dosis]" value='<?= $medicina['dosis']?>'placeholder="Dosis">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="medicamento[cuando]">Cuando</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id="medicamento[cuando]" id="medicamento[cuando]" value='<?= $medicina['cuando']?>'placeholder="Dosis">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="medicamento[donde]">Donde</label>
  <div class="controls">
    <input class="input-xlarge" type="text" id="medicamento[donde]" id="medicamento[donde]" value='<?= $medicina['donde']?>'placeholder="Dosis">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="medicamento[motivo]">Motivo</label>
  <div class="controls">
    <textarea class="input-xlarge" type="text" id="medicamento[motivo]" id="medicamento[motivo]" value='<?= $medicina['motivo']?>'> </textarea>
  </div>
</div>