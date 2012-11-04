<?php

require_once '../models/noticia.php';

//Datos de la forma registrarNoticia
$titulo=$_POST["titulo"];
$descripcion=$_POST["descripcion"];
$idPrefecto=1;	//Cambiar por el de la session

date_default_timezone_set("America/Monterrey");
$fecha = date("d-m-Y");
$hora = date("G:i");

//Objeto noticia
$not=new Noticia();

//Llamada a funcion para registrar la noticia
$not->registrarNoticia($idPrefecto, $fecha, $hora, $titulo, $descripcion);

header("Location: ../views/listaNoticias.php");
?>
