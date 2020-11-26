<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';

$db = iniciarConexion();


require '../html/signup.view.php';
