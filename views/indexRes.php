<?php 
$pageTitle="Listado de residentes";
include_once("../views/header_index.php");
require_once '../models/noticia.php';
//Objeto noticia
$not=new Noticia();
//Llamar a funcion para obtener el array asociativo con la informacion de cada noticia
$lista=$not->getNoticiasRecientes();
?>
    <div class="container">     
        <div class="span10 offset1">
          <div class="hero-unit span7">
            <h1>Hola, residente!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>            
          </div>        
         <?php
			$cont=1;
         foreach ($lista as $obj) {
         if($cont == 1 || $cont == 4 ){
         	?>
         	<div class="row-fluid">         	
         	 <div class="span4">
              <h2><?php echo $obj["titulo"];?></h2>
              <p><?php echo $obj["descripcion"];?></p>
              <p><a class="btn" href="../views/infoNoticia.php?id=<?php echo $obj["_id"];?>">Ver detalles &raquo;</a></p>
            </div><!--/span-->
         	<?php } else if($cont == 3 || $cont == 6 ){?>
            <div class="span4">
              <h2><?php echo $obj["titulo"];?></h2>
              <p><?php echo $obj["descripcion"];?></p>
              <p><a class="btn" href="../views/infoNoticia.php?id=<?php echo $obj["_id"];?>">Ver detalles &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
            <?php } else {?> 
             <div class="span4">
              <h2><?php echo $obj["titulo"];?></h2>
              <p><?php echo $obj["descripcion"];?></p>
              <p><a class="btn" href="../views/infoNoticia.php?id=<?php echo $obj["_id"];?>">Ver detalles &raquo;</a></p>
            </div><!--/span-->          
         <?php }}?>         
        </div><!--/span-->
    </div><!--/.container-->
<?php include_once("../views/footer.html");?>
  </body>
</html>