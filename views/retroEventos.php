<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Retroalimentacion de Evento</title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- <link href="../Css/style.css" rel="stylesheet" type="text/css" />-->
		<script type="text/javascript" src="../JavaScripts/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript">	

		</script>

	</head>

	<body>
		<?php include_once("../views/header_index.php");?>
		<!--Inicio-->
		<!--<div id="content"> -->
		<div class = "offset1">
		<h1>Retroalimentacion del Evento</h1>
		</div>
		<div class = "offset1">
			<form id="Control" class="form-horizontal" action="../controllers/registraRetroEventos.php" method="POST">
			<?php 
				//Verificar si ya se lleno el control de cuartos
				if(!$retro){
			?>
				<table>
				<tr>
					<td width = 120>
						Asistentes:
					</td>
					<td>
						<input type="text" name="asistentes" id="asistentes" placeholder="Esperados?"/>
					</td>
				</tr>
				<tr><td><br/></td></tr>
				<tr>
					<td width = 120>
						Problemas:
					</td>
					<td>
						<textarea name="problemas" id="problemas" rows= "3" class="span6" placeholder="Algo inesperado"></textarea>
					</td>
				</tr>
				<tr><td><br/></td></tr>
				<tr>
					<td width = 120>
						Costo:
					</td>
					<td>
						<input type="text" name="costo" id="costo" placeholder="Costo final"/>
					</td>
				</tr>
				<tr><td><br/></td></tr>
				<tr>
					<td width = 120 valign = "bottom">
						Calificacion:
					</td>
					<td valign = "bottom">
						<label class="radio inline">
							<input type="radio" name="calificacion" id="calificacion10" value="10" checked>
							10
						</label>
						<label class="radio inline">
							<input type="radio" name="calificacion" id="calificacion9" value="9">
							9
						</label>
						<label class="radio inline">
							<input type="radio" name="calificacion" id="calificacion8" value="8">
							8
						</label>
						<label class="radio inline">
							<input type="radio" name="calificacion" id="calificacion7" value="7">
							7
						</label>
						<label class="radio inline">
							<input type="radio" name="calificacion" id="calificacion6" value="6">
							6
						</label>
						<label class="radio inline">
							<input type="radio" name="calificacion" id="calificacion5" value="5">
							5
						</label>
						<label class="radio inline">
							<input type="radio" name="calificacion" id="calificacion4" value="4">
							4
						</label>
						<label class="radio inline">
							<input type="radio" name="calificacion" id="calificacion3" value="3">
							3
						</label>
						<label class="radio inline">
							<input type="radio" name="calificacion" id="calificacion2" value="2">
							2
						</label>
						<label class="radio inline">
							<input type="radio" name="calificacion" id="calificacion1" value="1">
							1
						</label>
					</td>
				</tr>
				<tr>
					<td width = 120>
						</br>
					</td>
					<td>
						<input type="hidden" name="id" id="id" value=<?php print '"'.$idEvento.'"';?> />
					</td>
				</tr>
				<tr>
					<td width = 120>
						Comentarios:
					</td>
					<td>
						<textarea name="comentarios" id="comentarios" rows= "5" class="span6" placeholder="Tus comentarios"></textarea>
					</td>
				</tr>
				
				</table>
				<br/>
				<button type="submit" class="btn btn-primary">Enviar</submit>
			<?php
			} else {
			?>
				<!-- Pagina de Ya se lleno -->
				<p>Ya se lleno la retroalimentacion de este evento</p>
			<?php
			}
			?>
			</form>
		
		</div>

		<?php include_once("../views/footer.html");?>
	</body>
</html>