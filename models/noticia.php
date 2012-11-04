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
class Noticia
{ 
   private $idPrefecto;
   private $fecha;
   private $hora;
   private $titulo;
   private $descripcion;
    
   /** 
   *  Constructor 
   *  @return void 
   */ 
   public function __construct() 
   { 
   		$idPrefecto="";
   		$fecha="";
   		$hora="";
   		$titulo="";
   		$descripcion="";
   } 

   /**
    * Registra una noticia en la base de datos
    */
   function registrarNoticia($idPrefecto, $fecha, $hora, $titulo, $descripcion){
   	//conectar a mongoDB
   	$conexion= new ConexionDB();
   	$db = $conexion->conectar();
   	//seleccionar la coleccion noticia
   $collection = $conexion->seleccionarColeccion($db, "noticia");
   	// agregar un registro
   	$obj = array( "idPrefecto" => $idPrefecto, "fecha" => $fecha, "hora" => $hora,    		
   			"titulo" => $titulo, "descripcion" =>  $descripcion );
   	$collection->insert($obj);
   }
   
   /**
    * Regresa todas las noticias
    */
   function getInfoNoticias(){
   	//conectar a mongoDB
   	$conexion= new ConexionDB();
   	$db = $conexion->conectar();
   	//seleccionar la coleccion noticia
   	$collection = $conexion->seleccionarColeccion($db, "noticia");
   	//query para buscar las noticias
   	$result = $collection->find();
   	return $result;
   }
   
   /**
    * Regresa todas las noticias de acuerdo a un id
    * @param $id, el id de la noticia
    */
   function getInfoNoticia($id){
   	//conectar a mongoDB
   	$conexion= new ConexionDB();
   	$db = $conexion->conectar();
   	//seleccionar la coleccion noticia
    $collection = $conexion->seleccionarColeccion($db, "noticia");
	//query para buscar la noticia
    $cursor = $collection->findOne(array('_id' => new MongoId($id)));
   	return $cursor;   	   	
   }
   
}
   ?>
    
