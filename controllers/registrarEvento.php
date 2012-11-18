<?php
require_once '../models/eventos.php';
require_once 'subirArchivo.php';

if(!isset($_SESSION)){
	session_start();
}

if (isset($_SESSION['user_type'])) {
	
	//Datos de la forma Registrar Evento
	if(isset($_SESSION['user_id']))
		$idPrefecto=$_SESSION["user_id"];
	if(isset($_POST["idEdificio"]))
		$idEdificio=$_POST["idEdificio"];
	if(isset($_POST["fechaInicio1"]))
		$fechaInicio=$_POST["fechaInicio1"];
	if(isset($_POST["fechaInicio2"]))
		$fechaInicio=$fechaInicio."|".$_POST["fechaInicio2"];
	if(isset($_POST["fechaFin1"]))
		$fechaTermino=$_POST["fechaFin1"];
	if(isset($_POST["fechaFin2"]))
		$fechaTermino=$fechaTermino."|".$_POST["fechaFin2"];
	if(isset($_POST["descripcion"]))
		$descripcionFotografia=$_POST["descripcion"];
	if(isset($_POST["titulo"]))
		$titulo=$_POST["titulo"];
	if(isset($_POST["presupuesto"]))
		$presupuesto=$_POST["presupuesto"];



	//Subir archivo en el servidor
	$archivo = new Archivo();
	//nombre unico del archivo
	$name = new MongoId();
	//Subimos el archivo
	if ($archivo->upload((string)$name)) {
	//Objeto evento
		$evento = new Evento();

	//Atributos del evento
		$evento->idPrefecto = $idPrefecto;
		$evento->idEdificio = $idPrefecto;
		$evento->fechaInicio = $fechaInicio;
		$evento->fechaTermino = $fechaTermino;
		$evento->descripcionFotografia = $descripcionFotografia;
		$evento->fotografia = $archivo->file;
		$evento->titulo = $titulo;
		$evento->presupuesto = $presupuesto;

		//Llamada a funcion para registrar el evento
		$evento->registrarEvento($name);

		header("Location: ../views/listaEventos.php");

	} else {
		//Redirigir a la pagina de crear evento
	}
} else {
	echo "No se tiene permisos de entrar aqui";
}
?>