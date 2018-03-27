<?php 

	require_once "IMostrable.php";

	Class Localidad implements IMostrable
	{

		private $nombre;
		private $codigoPostal;

		public function __construct($nombre, $codigoPostal){

			$this->nombre = $nombre;
			$this->codigoPostal = $codigoPostal;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getCodigoPostal(){
			return $this->codigoPostal;
		}

		public function setNombre($value)
		{
			$this->nombre = $value;
		}

		public function setCodigoPostal($value)
		{
			$this->codigoPostal = $value;
		}

		public function mostrarHTML()
		{
			echo "<li>Localidad</li>";
			echo "<ul><li>Nombre: ".$this->getNombre().".</li>";
			echo "<li>Codigo Postal: $this->codigoPostal.</li></ul>";
		}
	}

 ?>