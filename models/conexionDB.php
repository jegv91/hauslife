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

	protected function guardar($datos){
		$result = $this->collection->insert($datos);
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
}
?>