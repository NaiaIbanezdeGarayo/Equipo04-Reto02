<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';


//Genero el array principal y el array vacío que pasará a tener la información de las dos tablas.
$preguntas = array();

if(isset($_GET['tema'])) {
    $preguntas = leerPreguntasPorTema($_GET['tema']);

}else{
    $preguntas = leerPreguntas();
}
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


    $tema = "";
    switch ($pregunta["tema"]){
        case 1:
            $tema = "General";
            break;
        case 2:
            $tema = "Programación";
            break;
        case 3:
            $tema = "Producción";
            break;
        case 4:
            $tema = "Montaje";
            break;
        case 5:
            $tema = "Recursos humanos";
            break;
        case 6:
            $tema = "Mantenimiento";
            break;
    }

    array_push($preguntasConUsuarios, [
        "id" => $pregunta["id"],
        "titulo" => $pregunta["titulo"],
        "descripcion" => $pregunta["descripcion"],
        "fecha" => $pregunta["fecha"],
        "tema" => $tema,
        "nickname" => $nickname,
        "urlImg" => $urlImg
    ]);
}



require "../html/preguntas.view.php";
