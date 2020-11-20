<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';



//Abrimos la conexión con la base de datos.
$db = iniciarConexion();
//Solicitamos todos los datos que necesitemos (Preguntas y usuarios)
//$usuarios = leerUsuarios($db);

$preguntasConUsuarios = array();

//Para aplicar un orden habría que realizar distintas consultas MySQL ordenando
//el array de preguntas.

//Tratamos la información para crear objetos con lo necesario en la interfaz.


//Cerramos la conexión
finalizarConexion();

require "../html/preguntas.view.php";
