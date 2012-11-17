<?php

class ConexionDB {
	
	private $collection;

	private static $_dataBase;
	private static $_dbHandle;


	public function __construct() {
		ConexionDB::conectar();
	}

	public static function conectar(){
		if(!self::$_dbHandle) {
			self::$_dbHandle = new Mongo();
			self::$_dataBase = self::$_dbHandle->selectDB('hauslife');
		}
		return self::$_dataBase;
	}
	
	protected function seleccionarColeccion ($collection){
		$this->collection = new MongoCollection(self::conectar(), $collection);
	}

	protected function buscar($condicion = null){
		if (is_null($condicion)) {
			$result = $this->collection->find();
		} else {
			$result = $this->collection->findOne($condicion);
		}
		return $result;
	}

	protected function guardar($datos, $id = null){
		if (is_null($id)) {
			$result = $this->collection->insert($datos);	
		} else {
			$datos['_id'] =  new MongoId($id);
			$result = $this->collection->insert($datos);
		}
		return $result;
	}

	protected function borrar($datos){
		$result = $this->collection->remove($datos);
		return $result;
	}

	protected function actualizar($condicion, $datos){
		$result = $this->collection->update($condicion, $datos);
		return $result;
	}

	protected function cleanId($id){
		$cleanId = str_replace("*", "", "$id");
		return $cleanId;
	}

	protected function rellenarId($id){
		$repeticion = "";
		$length = 24 - strlen($id);
		if ($length > 0) {
			$repeticion = str_repeat('*',$length); 
		}
		return $id.$repeticion;
	}

	// public function strToHex($string)
	// {
	// 	$hex='';
	// 	for ($i=0; $i < strlen($string) AND $i < 25; $i++) {
	// 		$hex .= dechex(ord($string[$i]));
	// 	}
	// 	return $hex;
	// }

	// public function hexToStr($hex) {
	// 	$string='';
	// 	for ($i=0; $i < strlen($hex)-1; $i+=2) {
	// 		$string .= chr(hexdec($hex[$i].$hex[$i+1]));
	// 	}
	// 	return $string;
	// }
}
?>