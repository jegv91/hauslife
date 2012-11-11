<?php
	require_once '../models/residente.php';

		//Datos de la forma registrarNoticia
	if(isset($_POST["nombre"]))
		$nombre=$_POST["nombre"];
	if(isset($_POST["matricula"]))
		$matricula=$_POST["matricula"];
	if(isset($_POST["numCuarto"]))
		$numeroCuarto=$_POST["numCuarto"];
	if(isset($_POST["edificio"]))
		$edificio=$_POST["edificio"];
	if(isset($_POST["estadoProcedencia"]))
		$estadoProcedencia=$_POST["estadoProcedencia"];
	if(isset($_POST["telefonoEmergencia"]))
		$telefonoEmergencia=$_POST["telefonoEmergencia"];
	if(isset($_POST["alergias"]))
		$alergias=$_POST["alergias"];
	if(isset($_POST["enfermedades"]))
		$enfermedades=$_POST["enfermedades"];
	if(isset($_POST["telefonoPadres"]))
		$telefonoPadres=$_POST["telefonoPadres"];
	if(isset($_POST["comentarios"]))
		$comentarios=$_POST["comentarios"];

		//Objeto residente
	$res = new Residente();

	$res->nombre = $nombre;
	$res->matricula = $matricula;
	$res->numeroCuarto = $numeroCuarto;
	$res->edificio = $edificio;
	$res->estadoProcedencia = $estadoProcedencia;
	$res->telefonoEmergencia = $telefonoEmergencia;
	$res->alergias = $alergias;
	$res->enfermedades = $enfermedades;
	$res->telefonoPadres = $telefonoPadres;
	$res->comentarios = $comentarios;


	//Llamada a funcion para registrar el residente
	$res->registrarResidente();

	header("Location: ../views/listaResidentes.php");
?>