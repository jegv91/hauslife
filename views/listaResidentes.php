<?php 
require_once '../models/residente.php';
//Objeto residente
$res=new Residente();
//Llamar a funcion para obtener el array asociativo con la informacion de cada residente
$lista=$res->getInfoResidentes();
$pageTitle="Listado de residentes";
include_once("../views/header_index.php");?>
	<div class="container-fluid">
      <div class="row-fluid">
		<h1>Lista de residentes</h1>
			<table class="table table-bordered">
			<tr><th colspan=3>Nombre</th></tr>
			<?php			
			foreach ($lista as $obj) {
				echo "<tr><td>".$obj["nombre"]."</td>";				
				echo "<td><a class='btn btn-primary' href='verInformacion.php?id=".$obj["_id"]."'><i class='icon-user icon-white'></i>Ver Informaci&oacute;n</a></td>";
				echo "<td><a class='btn btn-danger' href='../controllers/eliminarResidente.php?id=".$obj["_id"]."'><i class='icon-trash icon-white'></i>Eliminar residente</a></td></tr>";				
			}
			?>
			</table>
			<a class='btn' href='registraResidente.php'><i class='icon-user'></i>Registrar residente</a>
		</div>
		</div>
		<?php include_once("footer.html");?>	
</body>
</html>