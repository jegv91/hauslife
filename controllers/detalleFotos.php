<?php

if(!isset($_SESSION)){
	session_start();
}

if(isset($_SESSION) && isset($_SESSION['user_id'])) {
	if($_SESSION['user_type'] == 0)
		header("location: ../fotoloader/index.php");
}
?>
