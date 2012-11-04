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
   $nombre="";
   $numeroCuarto="";
   $edificio="";
   $estadoProcedencia="";
   $telefonoEmergencia="";
   $alergias="";
   $enfermedades="";
   $telefonoPadres="";
   $comentarios=""; 
   } 

   /**
    * Registra un residente en la base de datos
    */
   function registrarResidente($nombre, $numeroCuarto, $edificio, $estadoProcedencia,
   					$telefonoEmergencia, $alergias, $enfermedades, $telefonoPadres, 
   					$comentarios){
   	//conectar a mongoDB
   	$conexion= new ConexionDB();
   	$db = $conexion->conectar();
   	//seleccionar la coleccion residente
   $collection = $conexion->seleccionarColeccion($db, "residente");
   	// agregar un registro
   	$obj = array( "nombre" => $nombre, "numeroCuarto" => $numeroCuarto, "edificio" => $edificio, 
   			"estadoProcedencia" => $estadoProcedencia, "telefonoEmergencia" => $telefonoEmergencia,
   			"alergias" => $alergias, "enfermedades" => $enfermedades, "telefonoPadres" => $telefonoPadres,
   			"comentarios" => $comentarios,      );
   	$collection->insert($obj);
   }
   
   /**
    * Regresa todos los datos de los residentes registrados
    * @param $nombre, el nombre del residente
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
    * @param $nombre, el nombre del residente
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
    
