<?php 
/** 
*  Clase Residente
*  @author Hector Jesus De La Garza Ponce 
*  @version 1.0 
*/ 
require_once 'conexionDB.php';
/** 
*  Modelo de residente 
*/ 
class Evento { 

	private $fechaInicio;
	private $fechaTermino;
	private $descripcionFotografia;
	private $fotografia;
	private $titulo;
	private $presupuesto;
	private $organizadores;
	private $telefonoPadres;
	private $idPrefecto;

	 /** 
	 *  Constructor 
	 *  @return void 
	 */ 
	 public function __construct() {
	 }

	//Get dinamicos
	 public function __get($property) {
	 	if (property_exists($this, $property)) {
	 		return $this->$property;
	 	}
	 }

	//Set dinamicos
	 public function __set($property, $value) {
	 	if (property_exists($this, $property)) {
	 		$this->$property = $value;
	 	}
	 }

	private function getVariablesClase(){
		$variables = get_class_vars(__CLASS__);
	 	foreach ($variables as $key=>$value) {
	 		$variables[$key] = $this->$key;
	 	}
	 	return $variables;
	}

	 public function registrarEvento(){
		//conectar a mongoDB
	 	$conexion= new ConexionDB();
	 	$db = $conexion->conectar();
		//seleccionar la coleccion residente
	 	$collection = $conexion->seleccionarColeccion($db, "evento");
	 	$evento = $this->getVariablesClase();
		// agregar un Evento
	 	$collection->insert($evento);
	 }

	 public function getInfoEventos(){
		//conectar a mongoDB
	 	$conexion= new ConexionDB();
	 	$db = $conexion->conectar();
		//seleccionar la coleccion residente
	 	$collection = $conexion->seleccionarColeccion($db, "evento");
		//query para buscar al residente
	 	$result = $collection->find();
	 	return $result;
	 }

	 
	 public function getInfoEvento($id){
		//conectar a mongoDB
	 	$conexion= new ConexionDB();
	 	$db = $conexion->conectar();
		//seleccionar la coleccion residente
	 	$collection = $conexion->seleccionarColeccion($db, "evento");
		//query para buscar al residente
	 	$cursor = $collection->findOne(array('_id' => new MongoId($id)));
	 	return $cursor;         
	 }
	}
	?>

