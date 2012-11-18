<?php 
require_once '../models/evento.php';
//Objeto evento
$evento=new Evento();
//Llamar a funcion para obtener el array asociativo con la informacion de cada residente
$lista=$evento->getInfoEventos();
$pageTitle="Eventos";
include_once("../views/header_index.php");?>
	<div class="container-fluid">
      <div class="row-fluid">
		<h1>Eventos</h1>
			<table class="table table-bordered">
			<tr><th colspan=3>Titulo</th></tr>
			<?php			
			foreach ($lista as $obj) {
				echo "<tr><td>".$obj["titulo"]."</td>";				
				echo "<td><a class='btn btn-primary' href='verInformacionEvento.php?id=".$obj["_id"]."'><i class='icon-glass icon-white'></i>Ver Informaci&oacute;n</a></td>";
				echo "<td><a class='btn btn-danger' href='../controllers/eliminarEvento.php?id=".$obj["_id"]."'><i class='icon-trash icon-white'></i>Eliminar evento</a></td></tr>";					
			}
			?>
			</table>
			<a class='btn' href='registraEvento.php'><i class='icon-glass'></i>Registrar evento</a>
		</div>
		</div>
		<?php include_once("../views/footer.html");?>
</body>
</html>