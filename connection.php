<?php  
	// conexión al servidor y base de datos
	$connection = new mysqli( "localhost", "root", "", "craft1" ) or die ("No se ha podido conectar al servidor de Base de datos");
	if ($connection->connect_error) { //Errores
		die("Connection failed: " . $connection->connect_error);
	} 
?>
