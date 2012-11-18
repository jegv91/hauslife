<?php
require_once '../models/eventos.php';

if(!isset($_SESSION)){
	session_start();
}

$idResidente = $_SESSION['user_id'];
$idEvento = $_GET["id"];
$evento = new Evento();
$result = $evento->rechazarEvento($idEvento, $idResidente);

header("Location: ../views/listaEventos.php");
?>
