<?php
	include_once('../models/fac.php');
	if(!isset($_SESSION)){
		session_start();
	}
	
	// Registro de los errores
    $error = "";
	
	if($_SESSION['user_type'] == 1){
		$matricula = $_SESSION['user_id'];
		$FAC = FALSE;
		
		$facModel = new Fac();
		$facModel->matricula = $matricula;

		$reng = $facModel->getInfoFAC($facModel->matricula);

		// Si el FAC existe
		if ($reng != null) {
			$FAC = TRUE;
		}
		include_once("../views/solicitudes.php");
		
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