<?php 
require_once '../models/residente.php';
$id=$_GET["id"];
$res=new Residente();
$data=$res->getInfoResidente($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Información de residente | Hauslife</title>
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
		<h1>Informaci&oacute;n del residente</h1>		
			<table class="table table-bordered">
			<tr><th>Nombre</th><td><?php echo $data["nombre"]?></td></tr>
			<tr><th>Matr&iacute;cula</th><td><?php echo $data["matricula"]?></td></tr>
			<tr><th>Edificio</th><td><?php echo $data["edificio"]?></td></tr>
			<tr><th>N&uacute;mero de cuarto</th><td><?php echo $data["numeroCuarto"]?></td></tr>
			<tr><th>Estado de procedencia</th><td><?php echo $data["estadoProcedencia"]?></td></tr>
			<tr><th>Tel&eacute;fono de emergencia</th><td><?php echo $data["telefonoEmergencia"]?></td></tr>
			<tr><th>Alergias</th><td><?php echo $data["alergias"]?></td></tr>
			<tr><th>Enfermedades</th><td><?php echo $data["enfermedades"]?></td></tr>
			<tr><th>Tel&eacute;fono de los padres</th><td><?php echo $data["telefonoPadres"]?></td></tr>
			<tr><th>Comentarios</th><td><?php echo $data["comentarios"]?></td></tr>
			</table>
			<a class='btn btn-primary' href='listaResidentes.php'><i class='icon-arrow-left icon-white'></i> Regresar</a>
		</div>
		<br /> <br />
		<?php //include_once("../views/footer.html");?>
</body>
</html>