<?php
require_once '../php/llamadasBD.php';
session_start();
$db = iniciarConexion();

$usuarios = leerUsuarios();




require '../html/usuarios.view.php';

