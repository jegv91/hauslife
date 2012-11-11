<?php

	require_once '../models/noticia.php';
	
	//Datos de la forma registrarNoticia
	$titulo=$_POST["titulo"];
	$descripcion=$_POST["descripcion"];
	$idPrefecto=1;	//Cambiar por el de la session
	
	//Hora y fecha actual
	date_default_timezone_set("America/Monterrey");
	$fecha = date("d-m-Y");
	$hora = date("G:i");
	
	//Objeto noticia
	$not=new Noticia();
	$not->__set("idPrefecto", $idPrefecto);
   	$not->__set("fecha", $fecha);
   	$not->__set("hora", $hora);
   	$not->__set("titulo", $titulo);
   	$not->__set("descripcion", $descripcion);
	
	//Llamada a funcion para registrar la noticia
	$not->registrarNoticia();
	
	header("Location: ../views/listaNoticias.php");
?>
