<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';

session_start();

//Abrimos la conexión con la base de datos.
$db = iniciarConexion();
if (consultarLogin() === 1){
    $user = $_SESSION['username'];
    header("location: ../php/preguntas.php");
}

require "../index.view.php";
finalizarConexion();
