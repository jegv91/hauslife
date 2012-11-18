<?php 
$pageTitle="Registrar residente";
include_once("../views/header_index.php");?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span10 offset1">
			<h1>Registrarse</h1>
			<form class="form-horizontal"
				action="../controllers/registrarResidente.php" method="POST">
				<div class="control-group">
					<label class="control-label" for="nombre">Nombre</label>
					<div class="controls">
						<input type="text" id="nombre" name="nombre"
							placeholder="Nombre completo">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="matricula">Matr&iacute;cula</label>
					<div class="controls">
						<input type="text" id="matricula" name="matricula">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password">Contrase&ntilde;a</label>
					<div class="controls">
						<input type="password" id="password" name="password">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password">Confirmar Contrase&ntilde;a</label>
					<div class="controls">
						<input type="password" id="password" name="password">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="numCuarto">Cuarto</label>
					<div class="controls">
						<input type="text" id="numCuarto" name="numCuarto"
							placeholder="Cuarto del edificio">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Edificio</label>
					<div class="controls">
						<select>
							<option id="1" name="edificio" value="1">1</option>
							<option id="2" name="edificio" value="2">2</option>
							<option id="3" name="edificio" value="3">3</option>
							<option id="4" name="edificio" value="4">4</option>
							<option id="5" name="edificio" value="5">5</option>
							<option id="6" name="edificio" value="6">6</option>
							<option id="7" name="edificio" value="7">7</option>
							<option id="8" name="edificio" value="8">8</option>
							<option id="9" name="edificio" value="9">9</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="estadoProcedencia">Estado de
						procedencia</label>
					<div class="controls">
						<input type="text" id="estadoProcedencia" name="estadoProcedencia"
							placeholder="Estado">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="telefonoEmergencia">Tel&eacute;fono de
						emergencia</label>
					<div class="controls">
						<input type="text" id="telefonoEmergencia"
							name="telefonoEmergencia" placeholder="(12) 1234-5678">
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
					<label class="control-label" for="telefonoPadres">Telefono de
						padres</label>
					<div class="controls">
						<input type="text" id="telefonoPadres" name="telefonoPadres"
							placeholder="(12) 1234-5678">
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
						<button type="button"  onclick="history.back()" class="btn btn-danger">
							<i class="icon-remove icon-white"></i> Cancelar
						</button>
						<button type="submit" class="btn btn-primary">
							<i class="icon-user icon-white"></i> Aceptar
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include_once("footer.html");?>
</body>
</html>
