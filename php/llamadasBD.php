<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

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
}

function leerRespuestas(){
    $dbh = iniciarConexion();
    $stmt = $dbh->prepare("SELECT * FROM Respuestas");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt;
}

//SELECT WHERE

function leerPreguntaConcreta($id){
    $dbh = iniciarConexion();

    $stmt = $dbh->prepare("SELECT * FROM Preguntas WHERE ID = $id");

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt;
}

function leerUsuarioConcreto($id){
    $dbh = iniciarConexion();

    $stmt = $dbh->prepare("SELECT * FROM Usuarios WHERE ID = $id");

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt;
}

//INSERTS

function insertarUsuario($tipoUsuario, $nickname, $password, $nombre, $apellido1, $apellido2, $email, $descripcion, $edad, $imagen){
    $dbh = iniciarConexion();

    $stmt = $dbh->prepare("INSERT INTO Usuarios (tipousuarios, nickname, password, nombre, apellido1, apellido2, email, descripcion, edad, imagen)
                            VALUES ($tipoUsuario, $nickname, $password, $nombre, $apellido1, $apellido2, $email, $descripcion, $edad, $imagen)");
    $stmt->execute();
}

function insertarPregunta($titulo, $descripcion, $tema){


    $servername = "localhost";
    $username = "admin";
    $password = "12345";
    $dbname = "db_reto2";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Preguntas (titulo, descripcion, fecha, tema, usuarioid)
        VALUES ('John', 'Doe', '2020-11-20', 1, 1)";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;


    /*$dbh = iniciarConexion();
    $stmt = $dbh->prepare("INSERT INTO Preguntas ('titulo', 'descripcion', 'tema') VALUES ('aaa', 'bbb', 'ccc')");
    $stmt->execute();*/
}





