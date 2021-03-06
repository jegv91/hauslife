<?php
	if(!isset($_SESSION)){
	session_start();
	}
	
	require_once '../models/residente.php';
	require_once '../models/usuario.php';
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
	if(isset($_POST["password"]))
		$password=$_POST["password"];

		//Objeto residente
	$res = new Residente();
	$usr = new Usuario();
	
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

	$usr->matricula = $matricula;
	$usr->tipo=1;
	$usr->pass=$password;
	$usr->idEdificio=$edificio;
	
	//Llamada a funcion para registrar el residente
	$res->registrarResidente($res->matricula);
	$usr->registrarUsuario();
	
	if(isset($_SESSION) && isset($_SESSION['user_id'])) {
		header("Location: ../views/listaResidentes.php");
	}else{
		header("Location: ../controllers/confirmacionRegistro.php");
	}	
?>