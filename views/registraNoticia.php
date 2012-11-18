<?php 
$pageTitle="Registrar residente";
include_once("../views/header_index.php");
?>
	<div class="container-fluid">
      <div class="row-fluid">
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
	</div>
	<?php include_once("../views/footer.html");?>
</body>
</html>
