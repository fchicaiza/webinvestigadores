<?php

	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "gedeon";
        $servicio = $_REQUEST["nombre"];
	
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	
	$consulta = "SELECT * FROM recursos WHERE recnombre ='$servicio'";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	
	
	
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		
		echo  $columna['recdescripcion'] ;
		require_once '../views/footer_content.php';
	}
	
	
	mysqli_close( $conexion );
?>