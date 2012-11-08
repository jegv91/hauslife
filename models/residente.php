<?php 
/** 
*  Clase Residente
*  @author Oz Garza 
*  @version 1.0 
*/ 
require_once 'conexionDB.php';
/** 
*  Modelo de residente 
*/ 
class Residente
{ 
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
    
   /**
    *  Constructor
    *  @return void
    */
   public function __construct()
   {
	   $this->nombre="";
	   $this->matricula="";
	   $this->numeroCuarto="";
	   $this->edificio="";
	   $this->estadoProcedencia="";
	   $this->telefonoEmergencia="";
	   $this->alergias="";
	   $this->enfermedades="";
	   $this->telefonoPadres="";
	   $this->comentarios=""; 
   }
   
   /**
    * Registra un residente en la base de datos
    */
   function registrarResidente(){
		//conectar a mongoDB
		$conexion= new ConexionDB();
		$db = $conexion->conectar();
		//seleccionar la coleccion residente
		$collection = $conexion->seleccionarColeccion($db, "residente");
		// agregar un registro
		$residente=array( "nombre" => $this->nombre, "matricula" => $this->matricula, "numeroCuarto" => $this->numeroCuarto, "edificio" => $this->edificio,
			   			"estadoProcedencia" => $this->estadoProcedencia, "telefonoEmergencia" => $this->telefonoEmergencia,
			   			"alergias" => $this->alergias, "enfermedades" => $this->enfermedades, "telefonoPadres" => $this->telefonoPadres,
			   			"comentarios" => $this->comentarios );
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
    * Elimina un residente en la base de datos
    */
   function eliminarResidente($idResidente){
	   	//conectar a mongoDB
	   	$conexion= new ConexionDB();
	   	$db = $conexion->conectar();
	   	//seleccionar la coleccion residente
	   	$collection = $conexion->seleccionarColeccion($db, "residente");
	   	// agregar un registro
	   $collection->remove(array('_id' => new MongoId($idResidente)));
   }
   
   /**
    * Regresa todos los datos de los residentes registrados
    */
   function getInfoResidentes(){
	   	//conectar a mongoDB
	   	$conexion= new ConexionDB();
	   	$db = $conexion->conectar();
	   	//seleccionar la coleccion residente
	   	$collection = $conexion->seleccionarColeccion($db, "residente");
	   	//query para buscar al residente
	   	$result = $collection->find();
	   	return $result;
   }
   
   /**
    * Regresa todos los datos de un residente de acuerdo al id
    * @param $id, el id del residente
    */
   function getInfoResidente($id){
	   	//conectar a mongoDB
	   	$conexion= new ConexionDB();
	   	$db = $conexion->conectar();
	   	//seleccionar la coleccion residente
	    $collection = $conexion->seleccionarColeccion($db, "residente");
		//query para buscar al residente
	    $cursor = $collection->findOne(array('_id' => new MongoId($id)));
	   	return $cursor;   	   	
   }
   
}
   ?>
    
