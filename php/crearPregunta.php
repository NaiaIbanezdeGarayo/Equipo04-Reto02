<?php
require '../php/llamadasBD.php';

if (isset($_POST['titulo'])) {
    insertarPregunta($_POST['titulo'], $_POST['descripcion'], $_POST['tema']);
}

require "../html/crearPregunta.view.php";