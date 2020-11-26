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
    $dbh = finalizarConexion();
}
function comprobarEmailx(){
    require "../php/llamadasBD.php";

    $dbh = iniciarConexion();
    $data = array("email"=>$_POST["value"]);
    $stmt = $dbh->prepare("SELECT * FROM Usuarios WHERE email = :email");
    $stmt->execute($data);
    $respuesta = $stmt->rowCount();
    echo $respuesta;
    $dbh = finalizarConexion();
}
