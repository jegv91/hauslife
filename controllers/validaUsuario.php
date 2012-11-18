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
    $matricula = $_POST['user'];
    $pass = $_POST['password'];
	
    // Registro de los errores
    $error = "";
	
	//Inicio de las verificaciones
    if ($matricula != "" && $pass != "") {
		/*creamos un usuario temporal para realizar la busqueda*/
		$userTemp = new Usuario();
		$userTemp->matricula = strtoupper($matricula);
		$userTemp->pass = $pass;
		/*Patron para la matricula completa*/
		$patron1 = '^[aAlL]\\d{8}$';
		/*Patron para la matricula sin los a0s*/
		$patron2 = '^[\\d]{6,7}$';
		/*Verificamos el patron que uso para obtener el usuario*/
		if(preg_match("/".$patron1."/", $matricula)){
			// Obtiene una instancia de usuario de acuerdo con la matricula o nomina
			$reng = $userTemp->buscaUsuario();
		}elseif(preg_match("/".$patron2."/", $matricula)){
			$userTemp->matricula = "A00".$matricula;
			// Obtiene una instancia de usuario de acuerdo con la matricula o nomina
			$reng = $userTemp->buscaUsuario();	
		}else{
			$error .= "La matr�cula no tiene el formato adecuado.";
			$reng = null;
		}		
		// Si el usuario existe
		if ($reng != null) {
			$row = new Usuario();
			$row->matricula = $reng['matricula'];
			$row->pass = $reng['pass'];
			$row->tipo = $reng['tipo'];
			
			if ($pass == $row->pass) {
				$_SESSION['user_type'] = $row->tipo;
				$_SESSION['user_id'] = $row->matricula;
				/*Redireccionamos al usuario acuerdo a sus permisos*/
				switch($row->tipo){
					/*El usuario es admin*/
					case 0: header("location: ../controllers/indexAdmin.php");
					break;
					/*El usuario es estudiante*/
					case 1: header("location: ../controllers/indexRes.php");
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
		header("location: ../controllers/error.php?error=$errores");
    }
?>
