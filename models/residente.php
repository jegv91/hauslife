<?php 
/** 
*  Clase Residente
*  @author Oz Garza 
*  @version 1.0 
*/ 
require_once '../controllers/conexionDB.php';
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

   function getNombre(){
   	return $this->nombre;
   }
   
   function setNombre($nombre){
   	$this->nombre=$nombre;
   }
   
   function registrarResidente($nombre, $numeroCuarto, $edificio, $estadoProcedencia,
   					$telefonoEmergencia, $alergias, $enfermedades, $telefonoPadres, 
   					$comentarios){
   	//conectar a mongoDB
   	$conexion= new ConexionDB();
   	$db = $conexion->conectar();
   	//seleccionar la coleccion residente
   	$collection = $db->residente;
   	// agregar un registro
   	$obj = array( "nombre" => $nombre, "numeroCuarto" => $numeroCuarto, "edificio" => $edificio, 
   			"estadoProcedencia" => $estadoProcedencia, "telefonoEmergencia" => $telefonoEmergencia,
   			"alergias" => $alergias, "enfermedades" => $enfermedades, "telefonoPadres" => $telefonoPadres,
   			"comentarios" => $comentarios,      );
   	$collection->insert($obj);
   }
   
   function getInfoResidente($nombre){
   	//conectar a mongoDB
   	$conexion= new ConexionDB();
   	$db = $conexion->conectar();
   	//seleccionar la coleccion residente
    $collection = $db->residente;
    $query = array('$where' => array('$name' => 'Oziel Garza'));
   	$cursor = $collection->find($query);
   	print_r($cursor);
   	foreach ($cursor as $obj) {
   		print_r($obj);
   	}   	
   }
   
}
   ?>
    
