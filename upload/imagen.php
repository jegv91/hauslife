<?php
class Imagen {
	public function mostrarImagen($imagen){
		$file = $imagen;
		header('Content-Type: image/jpeg');
		header('Content-Length: ' . filesize($file));
		echo file_get_contents($file);	
	}
}
?>