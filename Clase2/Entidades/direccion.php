<?php 

	require_once "localidad.php";
	require_once "IMostrable.php";

	Class Direccion implements IMostrable
	{

		private $calle;
		private $altura;
		private $localidad;

		public function __construct($calle, $altura, $localidad){

			$this->calle = $calle;
			$this->altura = $altura;
			$this->localidad = $localidad;
		}

		public function getCalle(){
			return $this->calle;
		}

		public function getAltura(){
			return $this->altura;
		}

		public function getLocalidad(){
			return $this->localidad;
		}

		public function setCalle($value)
		{
			$this->calle = $value;
		}

		public function setAltura($value)
		{
			$this->altura = $value;
		}

		public function setLocalidad($value)
		{
			$this->localidad = $value;
		}

		public function mostrarHTML()
		{
			echo "<li>Direccion</li>";
			echo "<ul><li>Calle: $this->calle.</li>";
			echo "<li>Altura: $this->altura.</li>";
			echo $this->localidad->mostrarHTML()."</ul>";
		}
	}

 ?>