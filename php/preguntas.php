<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';



//Solicitamos todos los datos que necesitemos (Preguntas y usuarios)
$preguntas = leerPreguntas();
$preguntasConUsuarios = array();

//Tratamos la información para crear objetos con lo necesario en la interfaz.
while ($pregunta = $preguntas->fetch()){

    $nickname = "";
    $urlImg = "";

    $usuarios = leerUsuarios();

    while ($usuario = $usuarios->fetch()){
        if ($pregunta["usuarioid"] == $usuario["id"]){
            $nickname = $usuario["nickname"];
        }

        if ($pregunta["usuarioid"] == $usuario["id"]){
            $id = $usuario["imagen"];
        }
    }

    array_push($preguntasConUsuarios, [
        "titulo" => $pregunta["titulo"],
        "descripcion" => $pregunta["descripcion"],
        "fecha" => $pregunta["fecha"],
        "nickname" => $nickname,
        "urlImg" => $urlImg
    ]);
}







require "../html/preguntas.view.php";
