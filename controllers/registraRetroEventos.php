<?php
	include_once('../models/retroEvento.php');
	if(!isset($_SESSION)){
		session_start();
	}
	
	// Registro de los errores
    $error = "";
	
	if($_SESSION['user_type'] == 0){
		$idEvento = $_POST["id"];
		
		if(isset($_POST["asistentes"])){
			$asistentes=$_POST["asistentes"];
		}
		if(isset($_POST["problemas"])){
			$problemas=$_POST["problemas"];
		}
		if(isset($_POST["costo"])){
			$costo=$_POST["costo"];
		}
		if(isset($_POST["calificacion"])){
			$calificacion=$_POST["calificacion"];
		}
		if(isset($_POST["comentarios"])){
			$comentarios=$_POST["comentarios"];
		}
		
		$rEvento = new Retro();
		
		$rEvento->asistentes = $asistentes;
		$rEvento->problemas = $problemas;
		$rEvento->costo = $costo;
		$rEvento->calificacion = $calificacion;
		$rEvento->comentarios = $comentarios;
		
		$rEvento->registrarRetroEvento($idEvento);

		print '<script type="text/javascript">'; 
		print 'alert("Se ha registrado la Retroalimentacion del Evento");';
		print 'location.href = "../controllers/indexAdmin.php";';
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