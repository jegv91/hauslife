<?php
	include_once('../models/usuario.php');
    session_start();

    // Funcion que prepara un array para enviarlo
    function array_envia($array) {
		$tmp = serialize($array);
		$tmp = urlencode($tmp);
		return $tmp;
    }
    // Datos proporcionados por el usuario
    $user = $_POST['user'];
    $passwd = $_POST['password'];
	
    // Registro de los errores
    $error = "";
    if ($user != "" && $passwd != "") {
		/*Validar como esta el usuario*/
		/*Patron para la matricula completa*/
		$patron1 = '^[aAlL]\\d{8}$';
		/*Patron para la matricula sin los a0s*/
		$patron2 = '^[\\d]{6,7}$';
		/*Verificamos el patron que uso para obtener el usuario*/
		if(preg_match("/".$patron1."/", $user)){
			// Obtiene una instancia de usuario de acuerdo con la matricula o nomina
			$row = usuario::usuario_por_matricula($user);
		}elseif(preg_match("/".$patron2."/", $user)){
			// Obtiene una instancia de usuario de acuerdo con la matricula o nomina
			$row = usuario::usuario_por_matricula($user);
		}else{
			$error .= "La matrícula no tiene el formato adecuado.";
			$row = null;
		}
		// Si el usuario existe
		if ($row != null) {
			// Obtiene la semilla
			$semilla = $row->get_codigo();
			// Aplica el hash a la semilla y a la contrasenia proporcionada
			$passwd = (string)(md5($semilla.$passwd));
			// Comprueba si el resultado anterior es igual al hash en la base de datos
			$t = $row->get_contrasena();
			if (trim($t) == $passwd) {
				$_SESSION['user_type'] = $row->get_tipo();
				$_SESSION['user_id'] = $row->get_id();
				/*Redireccionamos al usuario acuerdo a sus permisos*/
				$tipo = $row->get_tipo();
				switch($tipo){
					/*El usuario es admin*/
					case 0: header("location: ../Controllers/index_admin.php");
					break;
					/*El usuario es evaluador del departamento de becas*/
					case 1: header("location: ../Controllers/index_res.php");
					break;
				}
			} else {
				//echo "La contrase&ntilde;ia es incorrecta";
				$error .= "El usuario no existe o la contrase&ntilde;a es incorrecta.";
			}			
		} else {
			//echo "No existe ese usuario";
			$error .= "El usuario no existe o la contrase&ntilde;a es incorrecta.";
		}
    } else {
		//echo "Debes especificar una contrase&ntilde;a y un usuario";
		$error .= "Debes especificar una contrase&ntilde;a y un usuario";
    }
    // Si hubo un error
    if ($error != "") {
		// Redirecciona a la pagina de errores
		$errores[] = $error;
		$errores = array_envia($errores);
		header("location: ../Controllers/error.php?error=$errores");
    }
?>
