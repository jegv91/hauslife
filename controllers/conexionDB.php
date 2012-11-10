<?php
class ConexionDB{

	function conectar(){
		// connectar a mongo
		$m = new Mongo();

		// seleccionar base de datos hauslife
		$db = $m->hauslife;
		return $db;
	}
	//pendiente
	function seleccionarColeccion ($db, $collection){
		
	}

}
?>