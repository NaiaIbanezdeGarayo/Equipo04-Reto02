<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';
//Comprobamos si ya hay una sesión iniciada con ese mismo usuario
if (isset($_SESSION['username'])){
    header('location: ../php/comprobacionRegistroLogin.php');

}

if (isset($_POST['accederSignUp'])){
    //Valores
    $name = $_POST['name'];
    $ape1 = $_POST['apellido1'];
    $ape2 = $_POST['apellido2'];
    $birth = $_POST['birth'];
    $desc = $_POST['descripcion'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];

//Encriptar contraseña
    $pass1 = hash('sha512',$pass1);
    $pass2 = hash('sha512',$pass2);
    try {
        require_once "../php/llamadasBD.php";
        if (comprobarUsuarioPorNickname($username) !=false){
            echo "Este usuario ya existe";
        }
        if ($pass1 != $pass2){
            echo "Las contraseñas no coinciden";
        }else{
            crearUsuario($name,$ape1,$ape2,$birth,$desc,$email,$username,$pass1);
            require "../php/preguntas.php";
        }
    }catch (PDOException $pdo){

    }
}else
    require '../html/signup.view.php';



