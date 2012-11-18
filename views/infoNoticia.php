<?php 
require_once '../models/noticia.php';
$id=$_GET["id"];
$res=new Noticia();
$data=$res->getInfoNoticia($id);
$pageTitle="Informaci&oacute;n del noticia";
include_once("../views/header_index.php");?>
	<div class="container-fluid">
      <div class="row-fluid">
      <div class="span6 offset3">
		<h1>Detalles de la noticia</h1>		
			<table class="table table-bordered">
			<tr><th>Titulo</th><td><?php echo $data["titulo"]?></td></tr>
			<tr><th>Descripci&oacute;n</th><td><?php echo $data["descripcion"]?></td></tr>			
			</table>
			<a class='btn btn-primary' onclick="history.back()" ><i class='icon-arrow-left icon-white'></i> Regresar</a>
		</div>
		</div>
		</div>
		<?php include_once("../views/footer.html");?>
</body>
</html>