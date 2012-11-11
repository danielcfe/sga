<?= form_open('inscripcion/registrar',array('class'=>'form-horizontal'));?>
  <div id='data_form'>
    <? include 'form_alumno.php' ?>

    <div class="btn-group">
      <button class="btn show" type='button' data-template='#template_representante'>Agregar Representante</button>
      <button class="btn show" type='button' data-template='#template_medicamento'>Agregar Medicamento</button>
    </div>
  
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Finalizar Registro</button>
    </div>
  </div>
<?= form_close()?>
<script type='text/template' id='template_representante'>
  <? include 'form_representante.php' ?>
</script>

<script type='text/template' id='template_medicamento'>
  <? include 'form_medicamento.php' ?>
</script>
