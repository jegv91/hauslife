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
class Usuario
{ 
   private $matricula;
   private $pass;
   private $tipo;
    
   /**
    *  Constructor
    *  @return void
    */
   public function __construct($matricula, $pass, $tipo=NULL){
	   $this->matricula=$matricula;
	   $this->pass=$pass;
	   $this->tipo=$tipo;
   }
      
	private function getVariablesClase(){
		$variables = get_class_vars(__CLASS__);
		foreach ($variables as $key=>$value) {
			$variables[$key] = $this->$key;
		}
		return $variables;
   }
   
   /**
    * Registra un usuario en la base de datos
    */
   function registrarUsuario(){
		//conectar a mongoDB
		$conexion= new ConexionDB();
		$db = $conexion->conectar();
		//seleccionar la coleccion residente
		$collection = $conexion->seleccionarColeccion($db, "usuario");
		// agregar un registro
		$residente=$this->getVariablesClase();
		$collection->insert($residente);
   }
   
   /*
    * Getters dinamicos
    */
   public function __get($property) {
   	if (property_exists($this, $property)) {
   		return $this->$property;
   	}
   }
   
   /*
    * Setters dinamicos
   */
   public function __set($property, $value) {
   	if (property_exists($this, $property)) {
   		$this->$property = $value;
   	}
   }
  
   
   /**
    * Regresa todos los datos de un residente de acuerdo al id
    * @param $id, el id del residente
    */
   function buscaUsuario($matricula){
	   	//conectar a mongoDB
	   	$conexion= new ConexionDB();
	   	$db = $conexion->conectar();
	   	//seleccionar la coleccion residente
	    $collection = $conexion->seleccionarColeccion($db, "usuario");
		//query para buscar al residente
	    $cursor = $collection->findOne(array('_id' => new MongoId($id)));
	   	return $cursor;   	   	
   }
   
}
   ?>
    
