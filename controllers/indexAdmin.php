<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==0){
		include "../views/indexAdmin.php";
	} else{
		http_response_code(403);
		$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
		include('../controllers/error.php');
	}
?>