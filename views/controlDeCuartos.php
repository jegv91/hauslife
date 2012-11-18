<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Control de Cuartos</title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- <link href="../Css/style.css" rel="stylesheet" type="text/css" />-->
		<script type="text/javascript" src="../JavaScripts/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript">	

		</script>

	</head>

	<body>
		<!-- <?php //include_once("../views/header_index.php");?> -->
		<br /><br />
		<!--Inicio-->
		<!--<div id="content"> -->
		<div class = "form-actions">
			<form id="Control" class="form-horizontal" action="../controllers/controlDeCuarto.php" method="POST">
			<h3>Control de Cuarto</h3>
			<table>
			<tr>
				<td width = 120 valign = "bottom">
					Colchon
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="colchon" id="colchon1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="colchon" id="colchon2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="colchon" id="colchon3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Base de cama
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="base" id="base1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="base" id="base2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="base" id="base3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Cajones
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="cajones" id="cajones1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="cajones" id="cajones2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="cajones" id="cajones3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Escritorio
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="escritorio" id="escritorio1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="escritorio" id="escritorio2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="escritorio" id="escritorio3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Repisa
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="repisa" id="repisa1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="repisa" id="repisa2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="repisa" id="repisa3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Lavabo
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="labavo" id="labavo1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="labavo" id="labavo2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="labavo" id="labavo3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Closet
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="closet" id="closet1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="closet" id="closet2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="closet" id="closet3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Ventanas
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="ventanas" id="ventanas1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="ventanas" id="ventanas2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="ventanas" id="ventanas3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Mosquiteros
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="mosquiteros" id="mosquiteros1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="mosquiteros" id="mosquiteros2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="mosquiteros" id="mosquiteros3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Abanico
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="abanico" id="abanico1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="abanico" id="abanico2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="abanico" id="abanico3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Corcho
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="corcho" id="corcho1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="corcho" id="corcho2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="corcho" id="corcho3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Puerta Exterior
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="puertaExt" id="puertaExt1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="puertaExt" id="puertaExt2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="puertaExt" id="puertaExt3" value="3">
						Malo
					</label>
				</td>
			</tr>
			
			<tr>
				<td width = 120 valign = "bottom">
					Puerta Closet
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="puertaCloset" id="puertaCloset1" value="1" checked>
						Bueno
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="puertaCloset" id="puertaCloset2" value="2">
						Regular
					</label>
				</td>
				<td width = 120>
					<label class="radio inline">
						<input type="radio" name="puertaCloset" id="puertaCloset3" value="3">
						Malo
					</label>
				</td>
			</tr>
			</table>
			<br/>
			<submit class="btn btn-primary">Enviar</submit>
			
			</form>
		</div>

		<!-- <?php //include_once("../views/footer.html");?> -->
	</body>
</html>