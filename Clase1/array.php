<?php 
	require "alumno.php";

	$arrayTest = array(10, 8, 30);
	$arrayTest[] = 1000;
	$arrayTest["Apellido"] = "Lopez";
	$arrayTest["Alumno"] = new Alumno();
	$arrayTest[] = new Alumno();
	$arrayTest[] = "A";
	$arrayTest[33] = "Z";
	$arrayTest[10] = "B";

	sort($arrayTest);

	var_dump($arrayTest);

	rsort($arrayTest);

	var_dump($arrayTest);

	/*foreach($arrayTest as $x => $x_value) {
	    echo "Key=" . $x . ", Value=" . $x_value;
	    echo "<br>";
	}*/

 ?>