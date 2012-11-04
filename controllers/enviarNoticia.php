<?php
require_once '../models/noticia.php';
require_once '../models/residente.php';

//id de la noticia a enviar
$idNoticia = $_GET["id"];

//obtener datos de la noticia
$not=new Noticia();
$data=$not->getInfoNoticia($idNoticia);

//obtener datos de los residentes
$res=new Residente();
//Llamada a funcion para obtener el array asociativo con la informacion de cada residente
$lista=$res->getInfoResidentes();

//enviar por email
foreach ($lista as $obj) {
$para  = "'a00".$obj["matricula"]."@itesm.mx'"; // TO

// subject
$titulo = 'Noticias de residencias!';

// message
$mensaje = '
<html>
<head>
<title>Noticias de residencias</title>
</head>
<body>
<p>Hola '.$obj["nombre"]. '!	</p>
<p>Tu prefecto acaba de crear una nueva noticia:</p>
<br/>
<p>Fecha: '.$data["fecha"].'</p>
<p>Hora: '.$data["hora"].'</p>
<br/>
<p>Titulo: '.$data["titulo"].'</p>
<p>Descripcion: '.$data["descripcion"].'</p>
<br/>
<p>Atentamente, Residencias Tec</p> 
</body>
</html>
';

// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: '.$obj["nombre"].' <a00'.$obj["matricula"]. '@itesm.mx>'."\r\n";
$cabeceras .= 'From: Residencias Tec <no-reply@residencias.itesm.mx>' . "\r\n";

// Mail it
//mail($para, $titulo, $mensaje, $cabeceras);
mail($para, $titulo, $mensaje,  $cabeceras);
}
header("Location: ../views/listaNoticias.php");

//redirigir

?>