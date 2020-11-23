<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';



//Solicitamos todos los datos que necesitemos (Preguntas y usuarios)
$usuarios = leerUsuarios();
$preguntas = leerPreguntas();
$preguntasConUsuarios = array();

//Para aplicar un orden habría que realizar distintas consultas MySQL ordenando
//el array de preguntas.

//Tratamos la información para crear objetos con lo necesario en la interfaz.
foreach($preguntas as $pregunta){

    /*array_push($preguntasConUsuarios, [
        titulo => $pregunta["titulo"],
        descripcion => $pregunta["descripcion"],
        fecha => $pregunta["fecha"],
        nickname => $usuarios[$pregunta[idUsuario]]["nickname"],
        urlImg => $usuarios[$pregunta[idUsuario]]["urlImg"]
    ]);*/
}



require "../html/preguntas.view.php";
