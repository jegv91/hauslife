<?php
require_once '../models/residente.php';

$res=new Residente();

$nombre="Oziel Garza";
$numeroCuarto="";
$edificio="";
$estadoProcedencia="";
$telefonoEmergencia="";
$alergias="";
$enfermedades="";
$telefonoPadres="";
$comentarios="";

$res->registrarResidente($nombre, $numeroCuarto, $edificio, $estadoProcedencia, $telefonoEmergencia, $alergias, $enfermedades, $telefonoPadres, $comentarios);

$res->getInfoResidente("Oziel Garza");
?>