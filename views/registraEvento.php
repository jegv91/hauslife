<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrar Evento | Hauslife</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"
	type="text/css" />
	<link href="../bootstrap/css/datepicker.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js" />
	<script type="text/javascript" src="../JavaScripts/jquery-1.7.2.js" />
	<script type="text/javascript" src="../JavaScripts/bootstrap-datepicker.js" />
	<script type="text/javascript">

	</script>
</head>
<body>
	<?php //include_once("../views/header_index.php");?>
	<br />
	<br />
	<div class="container">
		<h1>Registrar Evento</h1>
		<form class="form-horizontal" action="../controllers/registrarEvento.php" method="POST">
			<div class="control-group">
				<label class="control-label" for="titulo">T&iacute;tulo</label>
				<div class="controls">
					<input type="text" id="titulo" name="titulo" placeholder="T&iacute;tulo del evento">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="descripcion">Descripci&oacute;n</label>
				<div class="controls">
					<textarea id="descripcion" name="descripcion" rows="6"
					placeholder="Descripci&oacute;n de la noticia"></textarea>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary"><i class="icon-comment icon-white"></i> Crear Evento</button>
				</div>
			</div>
			<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
				<input class="span2" size="16" type="text" value="12-02-2012">
				<span class="add-on"><i class="icon-th"></i></span>
			</div>
		</form>
	</div>
	<br />
	<br />
	<?php //include_once("../views/footer.html");?>
</body>
</html>
