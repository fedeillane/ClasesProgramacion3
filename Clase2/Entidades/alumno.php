<?php 

	require_once "Persona.php";


	Class Alumno extends Persona{

		private $legajo;
		private $fechaInscripcion;

		public function __construct($nombre, $apellido, $dni, $direccion, $legajo, $fechaInscripcion){
			parent::__construct($nombre, $apellido, $dni, $direccion);
			$this->legajo = $legajo;
			$this->fechaInscripcion = $fechaInscripcion;
		}

		public function getLegajo(){
			return $this->legajo;
		}

		public function getFechaInscripcion(){
			return $this->fechaInscripcion;
		}

		public function setLegajo($value){
			$this->legajo = $value;
		}

		public function setFechaInscripcion($value)
		{
			$this->fechaInscripcion = $value;
		}

		public function mostrarHTML()
		{
			echo "<h4>Alumno</h4>";
			parent::mostrarHTML();
			echo "<li>Legajo: ".$this->getLegajo()."</li>";
			echo "<li>Fecha de inscripcion: ".$this->getFechaInscripcion()->format('d-m-Y')."</li></ul>";
		}
	}


 ?>