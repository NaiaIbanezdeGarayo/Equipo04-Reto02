<?php


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


function leerPreguntas($dbh)
{
    //Preparamos la sentencia
    $stmt = $dbh->prepare("SELECT * FROM Preguntas");
    //Devuelve objetos anónimos que tendrán como propiedades las columnas obtenidas.
    //Después de indicar como queremos los datos utilizamos el método fetch() para acceder a la infomación
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($resultado as $row){
        echo $row["titulo"]." ".$row["descripcion"]." ".$row["fecha"]." ".$row["tema"]."\n";
    }
    $stmt->execute();
}
    /*Llamadas de BD*/
/*
    $preguntas = [
        "001" => [
            "titulo" => "¿No funciona el wifi?",
            "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "fecha" => "16-11-2020",
            "tema" => 0,
            "idUsuario" => "002"
        ],

        "002" => [
            "titulo" => "¿El servidor está encendido?",
            "descripcion" => "No logro conectarme... ",
            "fecha" => "16-11-2020",
            "tema" => 0,
            "idUsuario" => "001"
        ],

        "003" => [
            "titulo" => "El ordenador 35 tiene un pantallazo azúl",
            "descripcion" => "No logro conectarme... ",
            "fecha" => "16-11-2020",
            "tema" => 0,
            "idUsuario" => "003"
        ]
    ];


    return $preguntas;
}

*/
function leerUsuarios(){

    /*Llamadas de BD*/

    $usuarios = [
        "001" => [
            "tipoUsuario" => 1,
            "nickname" => "Juan88",
            "password" => "1234",
            "nombre" => "Juan",
            "apellido1" => "Gonzalez",
            "apellido2" => "Lorca",
            "email" => "juan@aergibide.org",
            "descripcion" => "Me llamo Juan y trabajo en mantenimiento.",
            "urlImg" => "../img/default-user-image.png"
        ],

        "002" => [
            "tipoUsuario" => 1,
            "nickname" => "Pedro76",
            "password" => "5678",
            "nombre" => "Pedro",
            "apellido1" => "Jimenez",
            "apellido2" => "Blanco",
            "email" => "pedro@aergibide.org",
            "descripcion" => "Me llamo Pedro y trabajo en recursos humanos.",
            "urlImg" => "../img/default-user-image.png"
        ],

        "003" => [
            "tipoUsuario" => 1,
            "nickname" => "Antonio67",
            "password" => "1111",
            "nombre" => "Antonio",
            "apellido1" => "Delgado",
            "apellido2" => "Elias",
            "email" => "antonio@aergibide.org",
            "descripcion" => "Me llamo Antonio y trabajo en ingeniería.",
            "urlImg" => "../img/default-user-image.png"
        ]
    ];


    return $usuarios;
}


