<?php
require '../php/llamadasBD.php';

if (isset($_POST['titulo'])) { //SOLO SI HAY DATOS EN EL POST

    //SUSTITUIR POR SESIÓN REAL
    $_SESSION["idUsuario"] = 2;

    $fecha = date('Y-m-d', time());

    insertarPregunta($_POST['titulo'], $_POST['descripcion'], $fecha, $_POST['tema'], $_SESSION["idUsuario"]);
}

require "../html/crearPregunta.view.php";