<?php 
require_once '../models/eventos.php';

$id = $_GET["id"];
$evento = new Evento();
$data = $evento->getInfoEvento($id);
$pageTitle = "Informaci&oacute;n del Evento";

include_once("../views/header_index.php");?>
	<div class="container-fluid">
      <div class="row-fluid">
		<h1>Informaci&oacute;n del Evento</h1>		
			<table class="table table-bordered">
			
			<tr><th>idPrefecto</th><td><?php echo $data['idPrefecto']?></td></tr>
			<tr><th>idEdificio</th><td><?php echo $data['idEdificio']?></td></tr>
			<tr><th>fechaInicio</th><td><?php echo $data['fechaInicio']?></td></tr>
			<tr><th>fechaTermino</th><td><?php echo $data['fechaTermino']?></td></tr>
			<tr><th>descripcionFotografia</th><td><?php echo $data['descripcionFotografia']?></td></tr>
			<tr><th>fotografia</th><td><?php echo $data['fotografia']?></td></tr>
			<tr><th>titulo</th><td><?php echo $data['titulo']?></td></tr>
			<tr><th>presupuesto</th><td><?php echo $data['presupuesto']?></td></tr>
			</table>
			<a class='btn btn-primary' onclick="history.back()" ><i class='icon-arrow-left icon-white'></i> Regresar</a>
		</div>
		</div>
		<?php include_once("../views/footer.html");?>
</body>
</html>