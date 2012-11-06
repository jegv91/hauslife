<?php

require_once '../models/noticia.php';

$id=$_GET["id"];
$not=new Noticia();
$data=$not->eliminarNoticia($id);

header("Location: ../views/listaNoticias.php");
?>
