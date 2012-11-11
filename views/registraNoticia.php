<!DOCTYPE html>
<html lang="en">
<head>
<title>Registrar noticia | Hauslife</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"
	type="text/css" />
<link href="../Css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../bootstrap/js/bootstrap.js" />
<script type="text/javascript" src="../JavaScripts/jquery-1.7.2.js" />
<script type="text/javascript">

</script>
</head>
<body>
	<?php //include_once("../views/header_index.php");?>
	<br />
	<br />
	<div class="container">
		<h1>Registrar noticia</h1>
		<form class="form-horizontal" action="../controllers/registrarNoticia.php" method="POST">
			<div class="control-group">
				<label class="control-label" for="titulo">T&iacute;tulo</label>
				<div class="controls">
					<input type="text" id="titulo" name="titulo" placeholder="T&iacute;tulo de la noticia">
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
					<button type="submit" class="btn btn-primary"><i class="icon-comment icon-white"></i> Crear noticia</button>
				</div>
			</div>
		</form>
	</div>
	<br />
	<br />
	<?php //include_once("../views/footer.html");?>
</body>
</html>
