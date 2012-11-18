<?php
	include_once('../models/retroEvento.php');
	if(!isset($_SESSION)){
		session_start();
	}
	
	// Registro de los errores
    $error = "";
	
	if($_SESSION['user_type'] == 0){
		$idEvento = $_GET["id"];
		$retro = FALSE;
		
		$rEvento = new Retro();

		$reng = $rEvento->getInfoRetroEvento($idEvento);

		// Si el retro existe
		if ($reng != null) {
			$retro = TRUE;
		}
		include_once("../views/retroEventos.php");
		
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