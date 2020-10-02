<?php
//Llamada al modelo
require_once("./model/recurso_model.php");
$rec=new recurso_model();
$datos=$rec->get_recurso();
 
//Llamada a la vista
require_once("./views/inicio.php");
?>

// Pruebas
