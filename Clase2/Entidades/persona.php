<?php 

	require_once "IMostrable.php";

	abstract Class Persona implements IMostrable
	{

		private $nombre;
		private $apellido;
		private $dni;
		private $direccion;

		public function __construct($nombre, $apellido, $dni, $direccion){

			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->dni = $dni;
			$this->direccion = $direccion;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getApellido(){
			return $this->apellido;
		}

		public function getDni(){
			return $this->dni;
		}

		public function setNombre($value)
		{
			$this->nombre = $value;
		}

		public function setApellido($value)
		{
			$this->apellido = $value;
		}

		public function setDni($value)
		{
			$this->dni = $value;
		}

		public function getDireccion()
		{
			return $this->direccion;
		}

		public function setDireccion($value)
		{
			$this->direccion = $value;
		}

		public function mostrarHTML()
		{
			echo "<ul><li>Nombre: $this->nombre.</li>";
			echo "<li>Apellido: $this->apellido.</li>";
			echo "<li>DNI: $this->dni.</li>";
			echo $this->direccion->mostrarHTML();
		}

	}

 ?>