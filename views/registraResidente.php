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
					<label class="control-label" for="passwordConfirm">Confirmar Contrase&ntilde;a</label>
					<div class="controls">
						<input type="password" id="passwordConfirm" name="passwordConfirm">
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
						<select name="edificio">
							<option id="1" value="01">1</option>
							<option id="2" value="02">2</option>
							<option id="3" value="03">3</option>
							<option id="4" value="04">4</option>
							<option id="5" value="05">5</option>
							<option id="6" value="06">6</option>
							<option id="7" value="07">7</option>
							<option id="8" value="08">8</option>
							<option id="9" value="09">9</option>
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
