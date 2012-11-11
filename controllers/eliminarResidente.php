<?php

require_once '../models/residente.php';

$id=$_GET["id"];
$res=new Residente();
$data=$res->eliminarResidente($id);

header("Location: ../views/listaResidentes.php");
?>
