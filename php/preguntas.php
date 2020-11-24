<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';


//Genero el array principal y el array vacío que pasará a tener la información de las dos tablas.
$preguntas = leerPreguntas();
$preguntasConUsuarios = array();

//Bucle que recorre todas las preguntas y busca el nickname y la imagen del usuario en cuestión.
while ($pregunta = $preguntas->fetch()){

    $nickname = "";
    $urlImg = "";

    $usuarios = leerUsuarios();

    while ($usuario = $usuarios->fetch()){

        if ($pregunta["usuarioid"] == $usuario["id"]){
            $nickname = $usuario["nickname"];
            $urlImg = $usuario["imagen"];
        }

    }

    array_push($preguntasConUsuarios, [
        "id" => $pregunta["id"],
        "titulo" => $pregunta["titulo"],
        "descripcion" => $pregunta["descripcion"],
        "fecha" => $pregunta["fecha"],
        "nickname" => $nickname,
        "urlImg" => $urlImg
    ]);
}



require "../html/preguntas.view.php";
