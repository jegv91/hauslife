<?php 
/** 
*  Clase Fac
*  @author Carlos Rdz
*  @version 1.0 
*/ 
require_once 'conexionDB.php';
 
class Comprobante extends ConexionDB{

	private $matricula;
	private $fechaRegistro;
	private $destinatario;
	
	
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

	public function registrarComprobante($id = NULL){
		$this->seleccionarColeccion('comprobante');
		$com = $this->getVariablesClase();
		if (is_null($id)) {
			$this->guardar($com);	
		} else {
			$id = $this->rellenarId($id);
			$id = strtoupper($id);
			$this->guardar($com, $id);
		}
	}

	public function getInfoComprobantes(){
		$this->seleccionarColeccion('comprobante');
		$result = $this->buscar();
		return $result; 
	}

	public function getInfoComprobante($idComprobante){
		$this->seleccionarColeccion('comprobante');
		$com = array('matricula' => $idComprobante);
		$result = $this->buscar($com);
		return $result; 
	}

	public function eliminarComprobante($idComprobante){
		$this->seleccionarColeccion('comprobante');
		$array = array('_id' => new MongoId($idComprobante));
		$this->borrar($array);
	}

}
?>

