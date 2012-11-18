<?php 
/** 
*  Clase Fac
*  @author Carlos Rdz
*  @version 1.0 
*/ 
require_once 'conexionDB.php';
 
class Cuarto extends ConexionDB{

	private $matricula;
	
	private $colchon;
	private $base;
	private $cajones;
	private $escritorio;
	private $repisa;
	private $labavo;
	private $closet;
	private $ventanas;
	private $mosquiteros;
	private $abanico;
	private $corcho;
	private $puertaExt;
	private $puertaCloset;
	
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

	public function registrarCuarto($id = NULL){
		$this->seleccionarColeccion('cuarto');
		$cuarto = $this->getVariablesClase();
		if (is_null($id)) {
			$this->guardar($cuarto);	
		} else {
			$id = $this->rellenarId($id);
			$id = strtoupper($id);
			$this->guardar($cuarto, $id);
		}
	}

	public function getInfoCuartos(){
		$this->seleccionarColeccion('cuarto');
		$result = $this->buscar();
		return $result; 
	}

	public function getInfoCuarto($idCuarto){
		$this->seleccionarColeccion('cuarto');
		$cuarto = array('matricula' => $idCuarto);
		$result = $this->buscar($cuarto);
		return $result; 
	}

	public function eliminarCuarto($idCuarto){
		$this->seleccionarColeccion('cuarto');
		$array = array('_id' => new MongoId($idCuarto));
		$this->borrar($array);
	}

}
?>