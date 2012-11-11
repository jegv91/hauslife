<?php 
/** 
*  Clase Residente
*  @author Oz Garza 
*  @version 1.0 
*/ 
require_once 'conexionDB.php';
 
class Residente extends ConexionDB{

	private $nombre;
	private $matricula;
	private $numeroCuarto;
	private $edificio;
	private $estadoProcedencia;
	private $telefonoEmergencia;
	private $alergias;
	private $enfermedades;
	private $telefonoPadres;
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

	public function registrarResidente(){
		$this->seleccionarColeccion('residente');
		$residente = $this->getVariablesClase();
		$this->guardar($residente);
	}

	public function getInfoResidentes(){
		$this->seleccionarColeccion('residente');
		$result = $this->buscar();
		return $result; 
	}

	public function getInfoResidente($id){
		$this->seleccionarColeccion('residente');
		$residente = array('_id' => new MongoId($id));
		$result = $this->buscar($residente);
		return $result; 
	}

	public function eliminarResidente($idResidente){
		$this->seleccionarColeccion('residente');
		$array = array('_id' => new MongoId($idResidente));
		$this->borrar($array);
	}

}
?>

