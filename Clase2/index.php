<?php 

	require_once "Entidades/persona.php";	
	require_once "Entidades/localidad.php";
	require_once "Entidades/direccion.php";
	require_once "Entidades/profesor.php";
	require_once "Entidades/alumno.php";

	
	$lanus = new Localidad("Lanus", 1234);
	$quilmes = new Localidad("Quilmes", 4321);
	$avellaneda = new Localidad("Avellaneda", 3241);

	$direccionLanus = new Direccion("Espana", 379, $lanus);
	$direccionQuilmes = new Direccion("Corrientes", 5345, $quilmes);
	$direccionAvellaneda = new Direccion("Sarmiento", 73, $avellaneda);

	// $persona = new Persona("Federico", "Illane", 35237360, $direccion);
	$alumno1 = new Alumno("Nicolas", "Toranzo", 33734362, $direccionLanus, 150123, new \DateTime("03/12/2017"));
	$alumno2 = new Alumno("Horacio", "Garcia", 98764732, $direccionQuilmes, 567435, new \DateTime("08/03/2015"));
	$alumno3 = new Alumno("Hector", "Nunez", 345765123, $direccionAvellaneda, 987234, new \DateTime("03/19/2018"));

	$materias1 = array("Comunicacion","Periodismo","Latin");
	$materias2 = array("Programacion","Laboratorio");
	$materias3 = array("Lengua","Ciencias Sociales","Geografia", "Sociedad y Estado");

	$dias1 = array("Lunes", "Martes", "Jueves");
	$dias2 = array("Miercoles", "Viernes");
	$dias3 = array("Martes", "Jueves", "Viernes", "Sabado");

	$profesor1 = new Profesor("Agostina", "Valente", 31915175, $direccionLanus, $materias1, $dias1);
	$profesor2 = new Profesor("Pablo", "Gonzales", 987654321, $direccionAvellaneda, $materias2, $dias2);
	$profesor3 = new Profesor("Esteban", "Quito", 123123654, $direccionQuilmes, $materias3, $dias3);

	$facultad = array($alumno1, $profesor1, $alumno2, $profesor2, $alumno3, $profesor3);

	foreach ($facultad as $value) {
		$value->mostrarHTML();
	}

	// var_dump($localidad);
	// echo "<br>";
	// var_dump($direccion);
	// echo "<br>";
	// var_dump($persona);

	// $persona->mostrarHTML();
	// $alumno->mostrarHTML();
	// $profesor1->mostrarHTML();

 ?>