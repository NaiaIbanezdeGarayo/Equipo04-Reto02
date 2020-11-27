<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST["action"])){
    $action = $_POST["action"];
    switch ($action){
        case "comprobarNickname":
            comprobarNickname();
            break;
        case "comprobarEmail":
            comprobarEmailx();
            break;
        case "filtrarFechaDesc":
            filtrarFechaDesc();
            break;
        case "filtrarFechaAsc":
            filtrarFechaAsc();
            break;
        case "marcarFavorito":
            marcarFavorito();
            break;
        default: "Error";
    }
}
function comprobarNickname(){
    require "../php/llamadasBD.php";
    $dbh = iniciarConexion();
    $data = array("nickname"=>$_POST["value"]);
    $stmt = $dbh->prepare("SELECT * FROM Usuarios WHERE nickname = :nickname");
    $stmt->execute($data);
    $respuesta = $stmt->rowCount();
    echo $respuesta;
    finalizarConexion();
}
function comprobarEmailx(){
    require "../php/llamadasBD.php";

    $dbh = iniciarConexion();
    $data = array("email"=>$_POST["value"]);
    $stmt = $dbh->prepare("SELECT * FROM Usuarios WHERE email = :email");
    $stmt->execute($data);
    $respuesta = $stmt->rowCount();
    echo $respuesta;
    finalizarConexion();
}
function filtrarFechaAsc(){
    require "../php/llamadasBD.php";
    $dbh = iniciarConexion();
    $stmt = $dbh->prepare("SELECT * FROM Preguntas ORDER BY fecha ASC");
    $stmt->execute();
}
function filtrarFechaDesc(){
    require "../php/llamadasBD.php";
    $dbh = iniciarConexion();
    $stmt = $dbh->prepare("SELECT * FROM Preguntas ORDER BY fecha DESC");
    $stmt->execute();
}
function marcarFavorito(){
    require "../php/llamadasBD.php";
    $dbh = iniciarConexion();
    $idpregunta = $_GET["pregunta"];
    $idrespuesta = $_POST["respuesta"];
    $data = array(
        'preguntaid'=>$idpregunta,
        'respuestaid'=>$idrespuesta
    );



    $stmt = $dbh->prepare("INSERT INTO Favoritos(preguntaid,respuestaid) VALUES ('$idpregunta', '$idrespuesta') ");
    $stmt->execute();
}
