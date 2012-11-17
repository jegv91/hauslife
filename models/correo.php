<?php

class Mail {
	//Correo del administrador de la pagina
	private $from = "a00806037@itesm.mx";

	private $to;
	private $header;
	private $body;
	private $footer;
	private $subject;
	private $title;
	
	public function __construct() {
		$this->getVariablesClase(true);
	}

	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}

	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
	}

	private function getVariablesClase($value = false){
		$variables = get_class_vars(__CLASS__);
		if ($value){
			foreach ($variables as $key=>$value) {
				$variables[$key] = "";
			}
		} else {
			foreach ($variables as $key=>$value) {
				$variables[$key] = $this->$key;
			} 
		}
		return $variables;
	}

	// sendMail
	/* Envia un mail al correo de la instancia para que
	* tenga el codigo de recuperacion de la contrasena
	* Requiere que el servidor tenga el binario 'sendmail'
	*/
	function sendMail() {
		// Encabezado del mail (necesario para que
		// no sea marcado como spam y pueda ser
		// leido por gestores de correo)
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
		$headers .= "To: " . $this->to . "\r\n";
		$headers .= "From: " . $this->from . "\r\n";
		// Mensaje del mail (cada linea debe tener 70 caracteres)
		$message = "
		<html>
		<head>
		<title>".$this->title."</title>
		</head>
		<body>
		<h2>".$this->title."</h2><br/>
		<h3>".$this->header."</h3>
		<p>
		".$this->body."
		</p>
		<p>
		".$this->footer."
		</p>
		</body>";
		// Se asegura de que el mensaje tenga 70 caracteres por linea
		$message = wordwrap($message, 70);
		// Una vez listo el correo, se envia
		$result = mail($this->to, $this->subject, $message, $headers); 
		return $result;
	}
}
?>