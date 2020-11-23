<?php
if (isset($_POST["action"])){
    $action = $_POST["action"];
    switch ($action){
        case "comprobarNickname":
            comprobarNickname();
            break;
        case "comprobarEmail":
            comprobarEmail();
            break;
    }
}
function comprobarNickname(){
    comprobarUsuarioPorNickname($_POST["nickname"]);
}
function comprobarEmail(){
    comprobarEmail($_POST["email"]);//Falta la BD
}