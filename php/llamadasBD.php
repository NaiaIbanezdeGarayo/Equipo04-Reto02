<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST["username"]) && isset($_POST["password"])){
    crearUsuario($_POST["name"], $_POST["apellido1"], $_POST["apellido2"], $_POST["birt"], $_POST["descripcion"], $_POST["email"], $_POST["username"], $_POST["password"]);
}
if (isset($_POST["user"]) && isset($_POST["pass"])){
    comprobarInicioSesion();
}

/*TEMPORAL HASTA TENER UNA BASE DE DATOS*/

function iniciarConexion(){
    //Aquí abrimos la conexión con MySQL.
    $dbname = "db_reto2";
    $host = "localhost";
    $user = "admin";
    $pass = "12345";
    try{
       $dbh = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
       return $dbh;
    }catch (PDOException $e){
        echo $e->getMessage();
        return null;
    }
}

function finalizarConexion(){
    //Aquí cerramos la conexión con MySQL.
    $dbh = null;
}

//SELECT ALL

function leerPreguntas()
{
    $dbh = iniciarConexion();
    //Preparamos la sentencia
    $stmt = $dbh->prepare("SELECT * FROM Preguntas");
    //Devuelve objetos anónimos que tendrán como propiedades las columnas obtenidas.
    //Después de indicar como queremos los datos utilizamos el método fetch() para acceder a la infomación
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt;
    $dbh = finalizarConexion();
}

function leerUsuarios()
{
    $dbh = iniciarConexion();
    //Preparamos la sentencia
    $stmt = $dbh->prepare("SELECT * FROM Usuarios");
    //Devuelve objetos anónimos que tendrán como propiedades las columnas obtenidas.
    //Después de indicar como queremos los datos utilizamos el método fetch() para acceder a la infomación
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt;
    $dbh = finalizarConexion();
}

function leerRespuestas(){
    $dbh = iniciarConexion();
    $stmt = $dbh->prepare("SELECT * FROM Respuestas");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt;
    $dbh = finalizarConexion();
}


//SELECT WHERE

function leerPreguntaConcreta($id){
    $dbh = iniciarConexion();

    $stmt = $dbh->prepare("SELECT * FROM Preguntas WHERE ID = $id");

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt;
    $dbh = finalizarConexion();
}

function leerUsuarioConcreto($id){
    $dbh = iniciarConexion();

    $stmt = $dbh->prepare("SELECT * FROM Usuarios WHERE ID = $id");

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt;
    $dbh = finalizarConexion();
}

function crearUsuario( $nickname, $password, $nombre, $apellido1, $apellido2, $email, $descripcion, $edad){
    $dbh = iniciarConexion();
    $password = password_hash($_POST['$password'],PASSWORD_BCRYPT);
    $stmt = $dbh->prepare("INSERT INTO Usuarios( nickname, password, nombre, apellido1, apellido2, email, descripcion, edad) values ( :nickname, :password, :nombre, :apellido1, :apellido2, :email, :descripcion, :edad)");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt;
    $dbh = finalizarConexion();
}

function comprobarUsuarioPorNickname($nickname){
    $dbh = iniciarConexion();
    $data = array("nickname"=>$nickname);
    $stmt = $dbh->prepare("SELECT COUNT(*) FROM Usuarios WHERE nickname= :nickname");
    $stmt->execute($data);
    $respuesta = $stmt->fetchColumn();
    echo $respuesta;
    $dbh = finalizarConexion();
}
function comprobarEmail($email){
    $dbh = iniciarConexion();
    $data = array("email"=>$email);
    $stmt = $dbh->prepare("SELECT COUNT(*) FROM Usuarios WHERE email = :email");
    $stmt->execute($data);
    $respuesta =  $stmt->fetchColumn();
    echo $respuesta;
    $dbh = finalizarConexion();
}
function consultarLogin(){
    $dbh = iniciarConexion();
    $data = array("user"=>$_POST["valor"]);
    $stmt = $dbh->prepare("SELECT COUNT(*) FROM Usuarios WHERE nickname = :user AND password = :pass");
    $stmt->execute($data);
    $respuesta = $stmt->fetchColumn();
    return $respuesta;
    $dbh = finalizarConexion();
}




