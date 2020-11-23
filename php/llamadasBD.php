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


    //NUEVO
    /*
    $arrayPreguntas = array();


    $id = 0;
    $tipoUsuario = 0;
    $nickname = "";
    $password = "";
    $nombre = "";
    $apellido1 = "";
    $apellido2 = "";
    $email = "";
    $descripcion = "";
    $edad = 0;

    while ($pregunta = $stmt->fetch()){

        array_push($arrayPreguntas, [
            $id => $pregunta["id"],
            $tipoUsuario => $pregunta["tipoUsuario"],
            $nickname => $pregunta["nickname"],
            $password => $pregunta["password"],
            $nombre => $pregunta["nombre"],
            $apellido1 => $pregunta["apellido1"],
            $apellido2 => $pregunta["apellido2"],
            $email => $pregunta["email"],
            $descripcion => $pregunta["descripcion"],
            $edad => $pregunta["edad"],
        ]);
    }


    return $arrayPreguntas;

*/

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




