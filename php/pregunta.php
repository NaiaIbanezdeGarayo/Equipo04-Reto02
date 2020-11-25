<?php
require_once '../php/llamadasBD.php';

if (isset($_POST['comentario'])) { //SOLO SI HAY DATOS EN EL POST

    //SUSTITUIR POR SESIÓN REAL
    $_SESSION["idUsuario"] = 2;

    

    $fecha = date('Y-m-d h:i', time());

    //echo $fecha;

    insertarComentario($_POST["comentario"], $fecha, $_GET["pregunta"], $_SESSION["idUsuario"], "");
}


$respuestas = leerRespuestas();
$respuestasConUsuarios = array();

$_SESSION["idPregunta"] = "aaaaa";

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