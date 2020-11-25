<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';
session_start();

$usuarios = leerUsuarios();
$preguntas = leerPreguntas();

$usuarioPerfil = array();
$preguntasUsuario = array();

$idUsuario = "";

while ($usuario = $usuarios->fetch()){

    if($usuario["nickname"] == $_GET["nickname"]){

        $idUsuario = $usuario["id"];

        array_push($usuarioPerfil, [
            "nickname" => $usuario["nickname"],
            "nombre" => $usuario["nombre"],
            "apellido1" => $usuario["apellido1"],
            "apellido2" => $usuario["apellido2"],
            "email" => $usuario["email"],
            "descripcion" => $usuario["descripcion"],
            "edad" => $usuario["edad"],
            "imagen" => $usuario["imagen"]
        ]);
    }

}

while ($pregunta = $preguntas->fetch()){

    if($pregunta["usuarioid"] == $idUsuario){

        array_push($preguntasUsuario, [
            "id" => $pregunta["id"],
            "titulo" => $pregunta["titulo"],
            "descripcion" => $pregunta["descripcion"],
            "fecha" => $pregunta["fecha"],
            "tema" => $pregunta["tema"],
            "usuarioid" => $pregunta["usuarioid"],
        ]);
    }

}

require "../html/perfil.view.php";
