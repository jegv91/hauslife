<?php
	include_once('../models/fac.php');
	include_once('../models/correo.php');
	if(!isset($_SESSION)){
		session_start();
	}
	
	// Registro de los errores
    $error = "";
	
	if($_SESSION['user_type'] == 1){
		$matricula = $_SESSION['user_id'];
		
		$facModel = new Fac();
		$facModel->matricula = $matricula;
		$facModel->fechaRegistro = new MongoDate();

		//Llamada a funcion para registrar el FAC
		$facModel->registrarFAC($facModel->matricula);
		
		$correo = new Mail();
		
		$correo->to = "carlos_14_378@hotmail.com";
		$correo->header = "Solicitud de FAC";
		$correo->body = "El alumno con matricula ".$matricula." ha solicitado que se le proporcione el codigo FAC";
		$correo->footer = "Atentamente,
		Administrador del Sitema de Residencias.";
		$correo->subject = "Solicitud de FAC del alumno ".$matricula;
		$correo->title = "Solicitudes";
		
		$correo->sendMail();
		
		print '<script type="text/javascript">'; 
		print 'alert("Tu FAC ha sido Registrado");'; 
		print 'location.href = "../controllers/solicitudes.php";';
		print '</script>';
		
		//include_once("../controllers/solicitudes.php");
		
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