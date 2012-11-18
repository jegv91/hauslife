<?php 
/** 
*  Clase Evento
*  @author Hector Jesus De La Garza Ponce 
*  @version 1.0 
*/ 
require_once 'conexionDB.php';
/** 
*  Modelo de residente 
*/ 
class Evento extends ConexionDB{ 

	private $fechaInicio;
	private $fechaTermino;
	private $descripcionFotografia;
	private $fotografia;
	private $titulo;
	private $presupuesto;
	private $organizadores;
	private $idPrefecto;

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

	public function registrarEvento(){
		$this->seleccionarColeccion('evento');
		$evento = $this->getVariablesClase();
		$this->guardar($evento);
	}

	public function getInfoEventos(){
		$this->seleccionarColeccion('evento');
		$result = $this->buscar();
		return $result;
	}


	public function getInfoEvento($idEvento){
		$this->seleccionarColeccion('evento');
		$evento = array('_id' => new MongoId($idEvento));
		$result = $this->buscar($evento);
		return $result;     
	}

	public function eliminarEvento($idEvento){
		$this->seleccionarColeccion('evento');
		$array = array('_id' => new MongoId($idEvento));
		$this->borrar($array);
	}
}
?>
