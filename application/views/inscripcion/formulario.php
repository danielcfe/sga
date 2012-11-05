<?= form_open('inscripcion/registrar',array('class'=>'form-horizontal'));?>
  <? include 'form_alumno.php' ?>
  <hr>
  <div class="control-group">
    <div class="controls">
      <button class="btn">Agregar Representante</button>
    </div>
  </div>
<!--  <script type='text/template' id='template_representante'>
   --> <? include 'form_representante.php' ?>
<!--  </script>-->

  <hr>
  <div class="control-group">
    <div class="controls">
      <button class="btn">Agregar Medicamento</button>
    </div>
  </div>
<!--  <script type='text/template' id='template_medicamento'>
   --> <? include 'form_medicamento.php' ?>
<!--  </script>
 --> 
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Finalizar Registro</button>
    </div>
  </div>
<?= form_close()?>