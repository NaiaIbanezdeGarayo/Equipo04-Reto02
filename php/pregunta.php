<?php
require_once '../php/llamadasBD.php';
session_start();

$respuestas = leerRespuestas();
$respuestasConUsuarios = array();

$preguntaBD = leerPreguntaConcreta($_GET["pregunta"]);
$pregunta = $preguntaBD->fetch();

$usuarioBD = leerUsuarioConcreto($pregunta["usuarioid"]);
$usuario = $usuarioBD->fetch();


while ($respuestaBD = $respuestas->fetch()){

    $nickname = "";
    $urlImg = "";

    $usuarios = leerUsuarios();

    while ($u = $usuarios->fetch()){

        if ($respuestaBD["usuarioid"] == $u["id"]){
            $nickname = $u["nickname"];
            $urlImg = $u["imagen"];
        }
    }

    if($respuestaBD["preguntaid"] == $_GET["pregunta"]){
        array_push($respuestasConUsuarios, [
            "id" => $respuestaBD["id"],
            "comentario" => $respuestaBD["comentario"],
            "fecha" => $respuestaBD["fecha"],
            "nickname" => $nickname,
            "urlImg" => $urlImg
        ]);
    }

}


require "../html/pregunta.view.php";