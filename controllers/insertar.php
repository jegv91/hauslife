<?php
require_once '../models/residente.php';
//Objeto residente
$res=new Residente();
//datos a insertar
$nombre="Fabiola Gonzalez";
$numeroCuarto="432";
$edificio="2";
$estadoProcedencia="Jalisco";
$telefonoEmergencia="1234-5678";
$alergias="Abejas, polen y el sol";
$enfermedades="Ninguna";
$telefonoPadres="9876-5432";
$comentarios="Duerme mucho";
//Metodo para registrar en mongodb
$res->registrarResidente($nombre, $numeroCuarto, $edificio, $estadoProcedencia, $telefonoEmergencia, $alergias, $enfermedades, $telefonoPadres, $comentarios);
?>