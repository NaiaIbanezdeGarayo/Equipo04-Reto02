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
    }
}
function comprobarNickname(){
    require "llamadasBD.php";
    comprobarUsuarioPorNickname($_POST["nickname"]);
}
function comprobarEmailx(){
    require "llamadasBD.php";
    comprobarEmail($_POST["email"]);
}