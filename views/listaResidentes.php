<?php 
require_once '../models/residente.php';
//Objeto residente
$res=new Residente();
//Llamar a funcion para obtener el array asociativo con la informacion de cada residente
$lista=$res->getInfoResidentes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Lista de residentes | Hauslife</title>
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
	<br/><br/>
		<div class="container">
		<h1>Lista de residentes</h1>
			<table class="table table-bordered">
			<tr><th colspan=2>Nombre</th></tr>
			<?php			
			foreach ($lista as $obj) {
				echo "<tr><td>".$obj["nombre"]."</td>";				
				echo "<td><a class='btn btn-primary' href='verInformacion.php?id=".$obj["_id"]."'>Ver Informaci&oacute;n</a></td></tr>";
			}
			?>
			</table>
		</div>
		<br /> <br />
		<?php //include_once("../views/footer.html");?>
</body>
</html>