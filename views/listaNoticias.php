<?php 
require_once '../models/noticia.php';
//Objeto noticia
$not=new Noticia();
//Llamar a funcion para obtener el array asociativo con la informacion de cada noticia
$lista=$not->getInfoNoticias();
include_once("../views/header_index.php");?>
	<br/><br/>
		<div class="container">
		<h1>Listado de noticias publicadas</h1>
			<table class="table table-bordered">
			<tr><th colspan=3>Noticia</th></tr>
			<?php			
			foreach ($lista as $obj) {
				echo "<tr><td>".$obj["titulo"]."</td>";				
				echo "<td><a class='btn btn-primary' href='../controllers/enviarNoticia.php?id=".$obj["_id"]."'><i class='icon-envelope icon-white'></i> Enviar por e-mail</a></td>";
				echo "<td><a class='btn btn-danger' href='../controllers/eliminarNoticia.php?id=".$obj["_id"]."'><i class='icon-trash icon-white'></i>Eliminar noticia</a></td></tr>";				
			}
			?>
			</table>
			<a class='btn' href='registraNoticia.php'><i class='icon-envelope'></i>Registrar noticia</a>
		</div>
		<br /> <br />
		<?php include_once("../views/footer.html");?>
</body>
</html>