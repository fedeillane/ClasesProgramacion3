<?php 
	
	require_once "Persona.php";

	Class Profesor extends Persona{

		private $materias;
		private $dias;

		public function __construct($nombre, $apellido, $dni, $direccion, $materias, $dias)
		{
			parent::__construct($nombre, $apellido, $dni, $direccion);
			$this->materias = $materias;
			$this->dias = $dias;
		}

		public function getMaterias(){
			foreach ($this->materias as $value) {
				echo "<li>$value</li>";
			}
		}

		public function getdias(){
			foreach ($this->dias as $value) {
				echo "<li>$value</li>";
			}
		}

		public function setMaterias($value){
			$this->materias = $value;
		}

		public function setNombre($value)
		{
			$this->dias = $value;
		}

		public function mostrarHTML()
		{
			echo "<h4>Profesor</h4>";
			parent::mostrarHTML();
			echo "<li>Materias: <ul>";
			echo $this->getMaterias()."</ul>";
			echo "<li>Dias: <ul>";
			echo $this->getDias()."</li></ul></ul>";
		}
	}

 ?>