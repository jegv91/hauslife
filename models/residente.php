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
class Residente extends ConexionDB{

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


  public function registrarResidente(){
    //seleccionar la coleccion residente
    $this->seleccionarColeccion('residente');
    // agregar un registro
    $residente = $this->getVariablesClase();
    //$conexion->collection->insert($residente);
    $this->guardar($residente);
  }


  public function eliminarResidente($idResidente){
    $this->seleccionarColeccion('residente');
      // eliminar un registro
    $array = array('_id' => new MongoId($idResidente));
      // $this->borrar($array, $collection);
    $this->borrar($array);

  }


  public function getInfoResidentes(){
      //conectar a mongoDB
    $this->seleccionarColeccion('residente');
    $result = $this->buscar();
    return $result; 

  }


  public function getInfoResidente($id){
    $this->seleccionarColeccion('residente');
    $result = $this->buscar($id);
    return $result; 
  }

}
?>

