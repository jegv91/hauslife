<?php

require_once '../models/eventos.php';

$id = $_GET["id"];
$evento = new Evento();
$data = $evento->eliminarEvento($id);

header("Location: ../views/listaEventos.php");
?>
