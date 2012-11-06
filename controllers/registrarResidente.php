<?php
	
	require_once '../models/residente.php';
	
	//Datos de la forma registrarNoticia
	if(isset($_POST["nombre"])){
		$nombre=$_POST["nombre"];
	}else{
		$nombre="";
	}
	if(isset($_POST["matricula"])){
		$matricula=$_POST["matricula"];
	}else{
		$matricula="";
	}
	if(isset($_POST["numCuarto"])){
		$numeroCuarto=$_POST["numCuarto"];
	}else{
		$numeroCuarto="";
	}
	if(isset($_POST["edificio"])){
		$edificio=$_POST["edificio"];
	}else{
		$edificio="";
	}
	if(isset($_POST["estadoProcedencia"])){
		$estadoProcedencia=$_POST["estadoProcedencia"];
	} else {
		$estadoProcedencia="";
	}
	if(isset($_POST["telefonoEmergencia"])){
		$telefonoEmergencia=$_POST["telefonoEmergencia"];
	}else{
		$telefonoEmergencia="";
	}
	if(isset($_POST["alergias"])){
		$alergias=$_POST["alergias"];
	} else {
		$alergias="";
	}
	if(isset($_POST["enfermedades"])){
		$enfermedades=$_POST["enfermedades"];
	} else {
		$enfermedades="";
	}
	if(isset($_POST["telefonoPadres"])){
		$telefonoPadres=$_POST["telefonoPadres"];
	} else {
		$telefonoPadres="";
	}
	if(isset($_POST["comentarios"])){
		$comentarios=$_POST["comentarios"];
	} else {
		$comentarios="";
	}
	
	//Objeto residente
	$res=new Residente();
	$res->__set("nombre", $nombre);
	$res->__set("matricula", $matricula);
	$res->__set("numeroCuarto", $numeroCuarto);
	$res->__set("edificio", $edificio);
	$res->__set("estadoProcedencia", $estadoProcedencia);
	$res->__set("telefonoEmergencia", $telefonoEmergencia);
	$res->__set("alergias", $alergias);
	$res->__set("enfermedades", $enfermedades);
	$res->__set("telefonoPadres", $telefonoPadres);
	$res->__set("comentarios", $comentarios);
	
	//Llamada a funcion para registrar el residente
	$res->registrarResidente();
	
	header("Location: ../views/listaResidentes.php");
?>
