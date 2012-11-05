<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Gestión de Alumnos</title>
	<?= link_tag('css/styles.css');?> <!-- incluye los estilos del html-->
	<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js'></script>
</head>
<body>
	<div id="header">
		<img src="http://placehold.it/100x50/3a4a4a" alt="Logo de la institucion">
		<h1>Sistema de Gestion de Alumnos</h1>
		<nav>
			<ul>
				<li><?= anchor('','Inicio')?></li>
				<li><?= anchor('consulta','Consultas') ?></li>
				<li><?= anchor('inscripcion','Inscripcion')?></li>
				<li><?= anchor('','Salir')?></li>
			</ul>
		</nav>
	</div>
	<div id="content">
		<?include $page;?>
	</div>
	<div id="footer"></div>
</body>
</html>