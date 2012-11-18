<?php 
require_once '../models/eventos.php';
//Objeto evento
$evento=new Evento();
$pageTitle="Eventos";
include_once("../views/header_index.php");
//Llamar a funcion para obtener el array asociativo con la informacion de cada evento
if($tipo == 0){
$lista=$evento->getInfoEventos();
} else {
	$lista=$evento->getInfoEventosPorEdificio($_SESSION['user_idEdificio']);

}?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span6 offset3">
			<h1>Eventos</h1>
			<table class="table table-bordered">
				<tr>
					<th colspan=3>Titulo</th>
				</tr>
				<?php		
				foreach ($lista as $obj) {
					echo "<tr><td>".$obj["titulo"]."</td>";
					echo "<td><a class='btn btn-primary' href='verInformacionEvento.php?id=".$obj["_id"]."'><i class='icon-glass icon-white'></i> Ver Informaci&oacute;n</a></td>";
					if($tipo==0){
						echo "<td><a class='btn btn-danger' href='../controllers/eliminarEvento.php?id=".$obj["_id"]."'><i class='icon-trash icon-white'></i> Eliminar evento</a></td></tr>";
					}
				}
				?>
			</table>
			<?php if($tipo==0){?>
			<a class='btn' href='registraEvento.php'><i class='icon-glass'></i>Registrar
				evento</a>
			<?php }?>
		</div>
	</div>
</div>
<?php include_once("../views/footer.html");?>
</body>
</html>
