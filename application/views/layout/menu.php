<ul class="nav">
  <li class="active">
    <?= anchor('inicio', 'Inicio');?>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Inscripciones <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li>
        <?= anchor('nscripcion/nuevo_ano', 'Inicio nuevo año escolar');?>        
      </li>
      <li>
        <?= anchor('inscripcion/alumno','Inscribir alumno')?>
      </li>
      <!--
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li class="nav-header">Nav header</li>
      <li><a href="#">Separated link</a></li>
      <li><a href="#">One more separated link</a></li>
    -->
    </ul>
  </li>
</ul>