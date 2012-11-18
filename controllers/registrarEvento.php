<?php
	require_once '../models/evento.php';

		//Datos de la forma registrarEvento
	if(isset($_POST["fechaInicio"]))
		$fechaInicio=$_POST["fechaInicio"];
	if(isset($_POST["fechaTermino"]))
		$fechaTermino=$_POST["fechaTermino"];
	if(isset($_POST["descripcionFotografia"]))
		$descripcionFotografia=$_POST["descripcionFotografia"];
	if(isset($_POST["fotografia"]))
		$fotografia=$_POST["fotografia"];
	if(isset($_POST["titulo"]))
		$titulo=$_POST["titulo"];
	if(isset($_POST["presupuesto"]))
		$presupuesto=$_POST["presupuesto"];
	if(isset($_POST["organizadores"]))
		$organizadores=$_POST["organizadores"];
	
	$idPrefecto=1;//Sacar el id de la session

		//Objeto residente
	$evento = new Evento();

	$evento->fechaInicio = $fechaInicio;
	$evento->fechaTermino = $fechaTermino;
	$evento->descripcionFotografia = $descripcionFotografia;
	$evento->fotografia = $fotografia;
	$evento->titulo = $titulo;
	$evento->presupuesto = $presupuesto;
	$evento->organizadores = $organizadores;
	$evento->idPrefecto = $idPrefecto;


	//Llamada a funcion para registrar el evento
	$evento->registrarEvento();

	header("Location: ../views/listaEventos.php");
?>