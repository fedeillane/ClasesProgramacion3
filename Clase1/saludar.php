<?php
	//Si o si para que funcione, Si no encuentra el archivo tira error
	require "alumno.php";

	//si ya esta incluido, no lo incluye
	require_once "alumno.php";

	//Si no lo encuentra tira warning
	//include "alumno.php";
	$contador = 10;

	for ($i=0; $i < 10; $i++) { 
		echo "Repe $i: ";
		include "repetidor.php";
	};

	$nombre = "Jose";

	echo "Hola Mundo PHP $nombre <br>";

	$sueldo = 10.333;

	printf("Sueldo: %f <br>", $sueldo);

	printf("Nombre: $nombre <br>");

	var_dump($sueldo);

	$miArray = array(1,2,3);

	var_dump($miArray);

	$segundoArray[33] = "Hola";
	
	//Agrega un valor al siguiente indice disponible
	$segundoArray[] = "Chau";

	$segundoArray[34] = "2018";

	$segundoArray["Maria"] = "Chau";

	var_dump($segundoArray);

	//Constructor array asociativo
	$tercerArray = array('Legajo' => 19,'Nombre' => "Federico Illane" );

	var_dump($tercerArray);

	$cuartoArray = array('Estudiante' => $tercerArray);

	var_dump($cuartoArray);

	$elAlumno = new Alumno();
	$elAlumno -> nombre = "Pepe";

	// Se crean nuevos atributos dinamicamente sin definir en la clase
	$elAlumno -> legajo = 666;
	$elAlumno -> mail = "No tengo";

	$otro = $elAlumno;
	$otro -> nombre = "Juan";

	echo "<br>";
	var_dump($elAlumno);
	//var_dump($otro);



?>