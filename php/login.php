<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';

session_start();



if (isset($_POST['accederLogin'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass = hash('sha512',$pass);
    require_once '../php/llamadasBD.php';
    if (comprobarInicioSesion($user,$pass)){

        $_SESSION[$user];
        $_SESSION[$pass];
        header('Location: ../php/preguntas.php');
        die();
    }

}

require "../index.view.php";


finalizarConexion();
