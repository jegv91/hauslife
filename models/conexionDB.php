<?php
/**
 * Clase ConexionDB
 * Usada para crear la conexion a MongoDB
 * @author Oz Garza
 */
class ConexionDB{
	
	/**
	 * Conecta a la base de datos mongo y envia un objeto con acceso a la base de datos hauslife 
	 */
	function conectar(){
		// connectar a mongo
		$m = new Mongo();

		// seleccionar base de datos hauslife
		$db = $m->hauslife;
		return $db;
	}
	
	/**
	 * Regresa un objeto con la coleccion dada como parametro
	 * @param $db, la base de datos a conectar
	 * @param $collection la coleccion a utilizar
	 */
	function seleccionarColeccion ($db, $collection){
		return $db->$collection;
	}

}
?>