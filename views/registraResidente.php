<?php 
$pageTitle="Registrar residente";
include_once("../views/header_index.php");?>
	<div class="container-fluid">
      <div class="row-fluid">
		<h1>Registrar residente</h1>
		<form class="form-horizontal" action="../controllers/registrarResidente.php" method="POST">
			<div class="control-group">
				<label class="control-label" for="nombre">Nombre</label>
				<div class="controls">
					<input type="text" id="nombre" name="nombre" placeholder="Nombre completo">
				</div>
			</div>
			
				<div class="control-group">
				<label class="control-label" for="matricula">Matricula</label>
				<div class="controls">
					<input type="text" id="matricula" name="matricula"	>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="numCuarto"># de cuarto</label>
				<div class="controls">
					<input type="text" id="numCuarto" name="numCuarto" placeholder="Cuarto del edificio">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="edificio">Edificio</label>
				<div class="controls">
					<input type="text" id="edificio" name="edificio" placeholder="Numero del edificio">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="estadoProcedencia">Estado de procedencia</label>
				<div class="controls">
					<input type="text" id="estadoProcedencia" name="estadoProcedencia" placeholder="Estado">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="telefonoEmergencia">Telefono de emergencia</label>
				<div class="controls">
					<input type="text" id="telefonoEmergencia" name="telefonoEmergencia" placeholder="(12) 1234-5678">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="alergias">Alergias</label>
				<div class="controls">
					<input type="text" id="alergias" name="alergias">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="enfermedades">Enfermedades</label>
				<div class="controls">
					<input type="text" id="enfermedades" name="enfermedades">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="telefonoPadres">Telefono de padres</label>
				<div class="controls">
					<input type="text" id="telefonoPadres" name="telefonoPadres" placeholder="(12) 1234-5678">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="comentarios">Comentarios</label>
				<div class="controls">
					<input type="text" id="comentarios" name="comentarios">
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary"><i class="icon-user icon-white"></i> Registrar residente</button>
				</div>
			</div>
		</form>
	</div>
	</div>
	<?php include_once("footer.html");?>
</body>
</html>
