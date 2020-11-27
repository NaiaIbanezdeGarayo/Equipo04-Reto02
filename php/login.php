<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';


if (isset($_POST['accederLogin'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];



    $pass = hash('sha512', $pass);
    if (comprobarInicioSesion($user, $pass)) {



        setcookie("nickname" ,$user, strtotime("2021-09-09"));

        $usuarios = leerUsuarios();

        while ($usuario = $usuarios->fetch()){

            if($usuario["nickname"] == $user){
                setcookie("idUsuario", $usuario["id"], strtotime("2021-09-09"));
            }

        }

        require "../php/preguntas.php";
        die();
    }else{
        require "../index.view.php";
    }
}

finalizarConexion();
