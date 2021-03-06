<?php 
/**
 *  Clase Evento
 *  @author Hector Jesus De La Garza Ponce
 *  @version 1.0
 */
require_once 'conexionDB.php';
/**
 *  Modelo de residente
 */
class Evento extends ConexionDB{

	private $idPrefecto;
	private $idEdificio;
	private $fechaInicio;
	private $fechaTermino;
	private $descripcionFotografia;
	private $fotografia;
	private $titulo;
	private $presupuesto;
	private $asistentes;

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

	public function registrarEvento($id = NULL){
		$this->seleccionarColeccion('evento');
		$evento = $this->getVariablesClase();
		if (is_null($id)) {
			$this->guardar($evento);
		} else {
			$id = $this->rellenarId($id);
			$id = strtoupper($id);
			$this->guardar($evento, $id);
		}
	}

	public function getInfoEventos(){
		$this->seleccionarColeccion('evento');
		$result = $this->buscar();
		return $result;
	}

	public function getInfoEvento($idEvento){
		$this->seleccionarColeccion('evento');
		$evento = array('_id' => new MongoId($idEvento));
		$result = $this->buscar($evento);
		return $result;
	}

	public function getInfoEventosTerminados($fecha, $edificio){
		$this->seleccionarColeccion('evento');
		$result = $this->buscarAntesDeFecha("fechaTermino",$fecha, $edificio);
		return $result;
	}

	public function getInfoEventosProximos($fecha, $edificio){
		$this->seleccionarColeccion('evento');
		$result = $this->buscarDespuesDeFecha("fechaInicio",$fecha, $edificio);
		return $result;
	}

	public function eliminarEvento($idEvento){
		$this->seleccionarColeccion('evento');
		$array = array('_id' => new MongoId($idEvento));
		$this->borrar($array);
	}

	public function confirmarEvento($idEvento, $idResidente){
		$data = $this->getInfoEvento($idEvento);

		$data = $data['asistentes'];

		if (is_null($data))
			$data = array();

		if (!$this->checarConfirmacion($data, $idResidente)) {
			array_push($data, $idResidente);

			$data = array_values($data);

			$newdata = array('$set' => array("asistentes" => $data));
			$buscar = array('_id' => new MongoId ($idEvento));

			$this->actualizar($buscar, $newdata);
		}
	}

	public function checarConfirmacion($data, $idResidente){
		if (is_null($data)) {
			return false;
		} elseif (in_array($idResidente, $data)) {
			return true;
		} else {
			return false;
		}
	}

	public function rechazarEvento($idEvento, $idResidente){
		$data = $this->getInfoEvento($idEvento);

		$data = $data['asistentes'];

		if (is_null($data))
			$data = array();

		if ($this->checarConfirmacion($data, $idResidente)) {

			$index = array_search('idResidente', $input);
			array_splice($data, $index, 1);

			$newdata = array('$set' => array("asistentes" => $data));
			$buscar = array('_id' => new MongoId ($idEvento));

			$this->actualizar($buscar, $newdata);
		}
	}
}
?>

