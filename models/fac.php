<?php 
/** 
*  Clase Fac
*  @author Carlos Rdz
*  @version 1.0 
*/ 
require_once 'conexionDB.php';
 
class Fac extends ConexionDB{

	private $matricula;
	private $fechaRegistro;
	
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

	public function registrarFAC($id = NULL){
		$this->seleccionarColeccion('fac');
		$fac = $this->getVariablesClase();
		if (is_null($id)) {
			$this->guardar($fac);	
		} else {
			$id = $this->rellenarId($id);
			$id = strtoupper($id);
			$this->guardar($fac, $id);
		}
	}

	public function getInfoFACs(){
		$this->seleccionarColeccion('fac');
		$result = $this->buscar();
		return $result; 
	}

	public function getInfoFAC($idFAC){
		$this->seleccionarColeccion('fac');
		$fac = array('matricula' => $idFAC);
		$result = $this->buscar($fac);
		return $result; 
	}

	public function eliminarFAC($idFAC){
		$this->seleccionarColeccion('fac');
		$array = array('_id' => new MongoId($idFAC));
		$this->borrar($array);
	}

}
?>

