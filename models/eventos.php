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
			$this->fechaInicio = "";
			$this->fechaTermino = "";
			$this->descripcionFotografia = "";
			$this->fotografia = "";
			$this->titulo = "";
			$this->presupuesto = "";
			$this->organizadores = "";
			$this->telefonoPadres = "";
			$this->idPrefecto = "";
		 }

		public function __set($name, $value) {
        $this->$name = $value;
    }

		public function __get($name) {
        return $this->$name;
    }

		 /**
			* Registra un evento en la base de datos
			* @input Array asociativo
			*/
			public function registrarEvento($parametros){
			//conectar a mongoDB
				$conexion= new ConexionDB();
				$db = $conexion->conectar();
			//seleccionar la coleccion residente
				$collection = $conexion->seleccionarColeccion($db, "evento");
			// agregar un registro
				$collection->insert($parametros);
			}

		 /**
			* Regresa todos los datos de los residentes registrados
			*/
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

		 /**
			* Regresa todos los datos de un residente de acuerdo al id
			* @param $id, el id del residente
			*/
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

