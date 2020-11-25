<?php
require '../php/llamadasBD.php';

if (isset($_POST['titulo'])) { //SOLO SI HAY DATOS EN EL POST

    $fecha = date('Y-m-d', time());

    echo "USERNAME" + _SESSION["username"];

    insertarPregunta($_POST['titulo'], $_POST['descripcion'], $_POST['tema'], $fecha);
}

require "../html/crearPregunta.view.php";