<?php
	include_once('../models/cuarto.php');
	if(!isset($_SESSION)){
		session_start();
	}
	
	// Registro de los errores
    $error = "";
	
	if($_SESSION['user_type'] == 1){
		$matricula = $_SESSION['user_id'];
		$control = FALSE;
		
		$cuarto = new Cuarto();
		$cuarto->matricula = $matricula;

		$reng = $cuarto->getInfoCuarto($cuarto->matricula);

		// Si el control existe
		if ($reng != null) {
			$control = TRUE;
		}
		include_once("../views/controlDeCuartos.php");
		
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