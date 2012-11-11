<?php 
/** 
*  Clase Usuario
*  @author Oz Garza 
*  @version 1.0 
*/ 
require_once 'conexionDB.php';
/** 
*  Modelo de usuario 
*/ 
class Usuario extends ConexionDB { 

	private $matricula;
	private $pass;
	private $tipo;

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

	public function registrarUsuario(){
		$this->seleccionarColeccion('usuario');
		$usuario = $this->getVariablesClase();
		$this->guardar($usuario);
	}

	
	public function buscaUsuario($matricula){
		$this->seleccionarColeccion('noticia');
		$usuario = array('matricula' => $matricula);
		$result = $this->buscar($usuario);
		return $result;   	   	
	}

}
?>

