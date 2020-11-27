<?php
require '../php/llamadasBD.php';
session_start();



if (isset($_POST['titulo'])) { //SOLO SI HAY DATOS EN EL POST

    //SUSTITUIR POR SESIÓN REAL


    $fecha = date('Y-m-d h:i:s', time());

    insertarPregunta($_POST['titulo'], $_POST['descripcion'], $fecha, $_POST['tema'], $_COOKIE["idUsuario"]);
}

require "../html/crearPregunta.view.php";