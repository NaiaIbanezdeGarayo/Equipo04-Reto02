<?php
require_once '../php/llamadasBD.php';

$pregunta = array();
$usuario = array();
$respuestas = array();

$pregunta = array();

$preguntaBD = leerPreguntaConcreta($_GET["pregunta"]);
$pregunta = $preguntaBD->fetch();

$usuarioBD = leerUsuarioConcreto($pregunta["usuarioid"]);
$usuario = $usuarioBD->fetch();



require "../html/pregunta.view.php";