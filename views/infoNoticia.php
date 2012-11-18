<?php 
require_once '../models/noticia.php';
$id=$_GET["id"];
$res=new Noticia();
$data=$res->getInfoNoticia($id);
$pageTitle="Informaci&oacute;n del noticia";
include_once("../views/header_index.php");?>
	<div class="container-fluid">
      <div class="row-fluid">
		<h1>Informaci&oacute;n del noticia</h1>		
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
			<a class='btn btn-primary' href='listaNoticias.php'><i class='icon-arrow-left icon-white'></i> Regresar</a>
		</div>
		</div>
		<?php include_once("../views/footer.html");?>
</body>
</html>