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
    * Registra una noticia en la base de datos
    */
   function registrarNoticia(){
   	//conectar a mongoDB
   	$conexion= new ConexionDB();
   	$db = $conexion->conectar();
   	//seleccionar la coleccion noticia
   $collection = $conexion->seleccionarColeccion($db, "noticia");
   	// agregar un registro
   $noticia=array( "idPrefecto" => $this->idPrefecto, "fecha" => $this->fecha, "hora" => $this->hora,
   		"titulo" => $this->titulo, "descripcion" =>  $this->descripcion );
   	$collection->insert($noticia);
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
   
   /**
    * Elimina una noticia de la base de datos
    */
   function eliminarNoticia($idNoticia){
   	//conectar a mongoDB
   	$conexion= new ConexionDB();
   	$db = $conexion->conectar();
   	//seleccionar la coleccion noticia
   	$collection = $conexion->seleccionarColeccion($db, "noticia");
   	// agregar un registro
   	$collection->remove(array('_id' => new MongoId($idNoticia)));
   }
   
}
   ?>
    
