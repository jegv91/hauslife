<?php
	include_once('../models/cuarto.php');
	//include_once('../models/correo.php');
	if(!isset($_SESSION)){
		session_start();
	}
	
	// Registro de los errores
    $error = "";
	
	if($_SESSION['user_type'] == 1){
		$matricula = $_SESSION['user_id'];
	
		if(isset($_POST["colchon"])){
			$colchon=$_POST["colchon"];
		}
		if(isset($_POST["base"])){
			$base=$_POST["base"];
		}
		if(isset($_POST["cajones"])){
			$cajones=$_POST["cajones"];
		}
		if(isset($_POST["escritorio"])){
			$escritorio=$_POST["escritorio"];
		}
		if(isset($_POST["repisa"])){
			$repisa=$_POST["repisa"];
		}
		if(isset($_POST["labavo"])){
			$labavo=$_POST["labavo"];
		}
		if(isset($_POST["closet"])){
			$closet=$_POST["closet"];
		}
		if(isset($_POST["ventanas"])){
			$ventanas=$_POST["ventanas"];
		}
		if(isset($_POST["mosquiteros"])){
			$mosquiteros=$_POST["mosquiteros"];
		}
		if(isset($_POST["abanico"])){
			$abanico=$_POST["abanico"];
		}
		if(isset($_POST["corcho"])){
			$corcho=$_POST["corcho"];
		}
		if(isset($_POST["puertaExt"])){
			$puertaExt=$_POST["puertaExt"];
		}
		if(isset($_POST["puertaCloset"])){
			$puertaCloset=$_POST["puertaCloset"];
		}
		
		$cuarto = new Cuarto();
		
		$cuarto->matricula = $matricula;
		$cuarto->colchon = $colchon;
		$cuarto->base = $base;
		$cuarto->cajones = $cajones;
		$cuarto->escritorio = $escritorio;
		$cuarto->repisa = $repisa;
		$cuarto->labavo = $labavo;
		$cuarto->closet = $closet;
		$cuarto->ventanas = $ventanas;
		$cuarto->mosquiteros = $mosquiteros;
		$cuarto->abanico = $abanico;
		$cuarto->corcho = $corcho;
		$cuarto->puertaExt = $puertaExt;
		$cuarto->puertaCloset = $puertaCloset;
		
		//Llamada a funcion para registrar el residente
		$cuarto->registrarCuarto($cuarto->matricula);
		
		print '<script type="text/javascript">'; 
		print 'alert("Tu Control de Cuartos se ha registrado con Exito!!!");';
		print 'location.href = "../controllers/indexRes.php";';
		print '</script>';
		
	}else{
		//echo "Debes especificar una contrase&ntilde;a y un usuario";
		$error .= "No tienes permisos para accesar al sistema";
	}

    // Si hubo un error
    if ($error != "") {
		// Redirecciona a la pagina de errores
		$errores[] = $error;
		$errores = array_envia($errores);
		header("location: ../Controllers/error.php?error=$errores");
    }
?>