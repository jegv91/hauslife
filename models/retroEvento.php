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
class Retro extends ConexionDB{

	private $asistentes;
	private $problemas;
	private $costo;
	private $calificacion;
	private $comentarios;

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

	public function registrarRetroEvento($id = NULL){
		$this->seleccionarColeccion('retro');
		$retro = $this->getVariablesClase();
		if (is_null($id)) {
			$this->guardar($retro);
		} else {
			$id = $this->rellenarId($id);
			$id = strtoupper($id);
			$this->guardar($retro, $id);
		}
	}

	public function getInfoRetroEventos(){
		$this->seleccionarColeccion('retro');
		$result = $this->buscar();
		return $result;
	}

	public function getInfoRetroEvento($idEvento){
		$this->seleccionarColeccion('retro');
		$retro = array('_id' => new MongoId($idEvento));
		$result = $this->buscar($retro);
		return $result;
	}

	public function eliminarRetroEvento($idEvento){
		$this->seleccionarColeccion('retro');
		$array = array('_id' => new MongoId($idEvento));
		$this->borrar($array);
	}
}
?>