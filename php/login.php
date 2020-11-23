<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';



//Abrimos la conexión con la base de datos.
$db = iniciarConexion();


//Cerramos la conexión
finalizarConexion();

require "../index.view.php";

