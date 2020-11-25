<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';

session_start();

if (isset($_SESSION['user'])){
    header('location: ../php/comprobacionRegistroLogin.php');
}

if (isset($_POST['accederLogin'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass = hash('sha512',$pass);
    try {
        require_once '../php/llamadasBD.php';
        $db = iniciarConexion();
        if (comprobarInicioSesion($user,$pass)){
            require "../php/preguntas.php";
        }else{
            echo "El usuario no existe. Debes crearlo primero";
        }

    }catch (PDOException $pdo){
        echo $pdo;
    }
}
//Abrimos la conexión con la base de datos.



/*if (consultarLogin() === 1){
    $user = $_SESSION['username'];
    header("location: ../php/preguntas.php");
}
*/
require "../index.view.php";
finalizarConexion();
