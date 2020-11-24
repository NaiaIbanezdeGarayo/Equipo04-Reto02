<?php
require_once '../php/llamadasBD.php';
$db = iniciarConexion();

$usuarios = leerUsuarios();




require '../html/usuarios.view.php';

