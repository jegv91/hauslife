<?php
// sendMail
/* Envia un mail al correo de la instancia para que
* tenga el codigo de recuperacion de la contrasena
* Requiere que el servidor tenga el binario 'sendmail'
*/
function sendMail() {
// Cambiar antes de subir al servidor
//CAMBIAR A MAIL DE ADMINISTRADOR
$from = "redfilantropia.mty@servicios.itesm.mx";
// Destinatario
$to = $this->correo;
// Asunto
$subject = "Recuperaci&oacute;n de contrase&ntilde;a";
// Encabezado del mail (necesario para que
// no sea marcado como spam y pueda ser
// leido por gestores de correo)
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers .= "To: " . $to . "\r\n";
$headers .= "From: " . $from . "\r\n";
// Mensaje del mail (cada linea debe tener 70 caracteres)
$message = "
<html>
<head>
<title>Recuperaci&oacute;n de contrase&ntilde;a</title>
</head>
<body>
<h2>Recuperaci&oacute;n de contrase&ntilde;a</h2><br/>
<h3>Estimado(a)".$this->nombre."</h3>
<p>
Se ha generado la solicitud de recuperaci&oacute;n de
contrase&ntilde;a para el Sistema de Evaluaci&oacute;n de
Becas de Filantrop&iacute;a. Si no ha solicitado la
recuperaci&oacute;n de la contrase&ntilde;a, por favor descarte
este correo. De lo contrario, entre en la siguiente p&aacute;gina
e ingrese el c&oacute;digo mostrado abajo junto a sus datos.
</p>
<p>
<!-- codigo -->
".$this->recuperacion."
</p>
<p>
<!-- Cambiar antes de subir al servidor -->
<!-- En mi caso, tengo el servidor en el puerto 8888 -->
<a href=\"http://10.16.127.113/views/recuperacionContrasena.php?codigo=".$this->recuperacion."&correo=".$this->correo."&mensaje=0\">
Recuperar contrase&ntilde;a
</a>
<br/>
<br/>
Saludos y mucha suerte 
<br/>
<br/>
<b>Red de Filantrop&iacute;a de Egresados y Amigos del Tec<br/>
Departamento de Becas y Apoyos Financieros<br/>
Tecnol&oacute;gico de Monterrey, Campus Monterrey<b/><br/>
</p>
</body>";
// Se asegura de que el mensaje tenga 70 caracteres por linea
$message = wordwrap($message, 70);
// Una vez listo el correo, se envia
$result = mail($to, $subject, $message, $headers); 
return $result;
}
?>