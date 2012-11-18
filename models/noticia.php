	<?php 
/** 
*  Clase Noticia
*  @author Oz Garza 
*  @version 1.0 
*/ 
require_once 'conexionDB.php';
/** 
*  Modelo de noticia
*/ 
class Noticia extends ConexionDB { 

	private $idPrefecto;
	private $fecha;
	private $hora;
	private $titulo;
	private $descripcion;

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

	
	public function registrarNoticia(){
		$this->seleccionarColeccion('noticia');
		$noticia = $this->getVariablesClase();
		$this->guardar($noticia);
	}

	public function getInfoNoticias(){
		$this->seleccionarColeccion('noticia');
		$result = $this->buscar();
		return $result;
	}
	
	public function getInfoNoticia($idNoticia){
		$this->seleccionarColeccion('noticia');
		$noticia = array('_id' => new MongoId($idNoticia));
		$result = $this->buscar($noticia);
		return $result; 	   	
	}

	public function eliminarNoticia($idNoticia){
		$this->seleccionarColeccion('noticia');
		$array = array('_id' => new MongoId($idNoticia));
		$this->borrar($array);
	}

}
?>

