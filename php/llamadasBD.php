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
    $preguntas = [];

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

function cargarDatosPreguntas(){
    $stmt = leerPreguntas();
    $stmtu = leerUsuarios();
    while ($row = $stmtu->fetch()){
        echo '<div class="divPregunta">';
        echo '<div class="divPregIzq">';
        echo '<label class="labPregNickname">'. $row["nickname"]. '</label>';
        echo '<a href="http://www.google.es">';
        echo '<img class="imgPregPerfil" src="'. $row["imagen"]. '">';
        echo '</a>';
        echo '</div>';
        echo '<div class="divPregDer">';

    }
    while($row = $stmt-> fetch()){
        echo '<a class="tituloPreg" href="http://www.google.es">'.$row["titulo"].'</a>';
        echo '<div class="divSeparadorpregunta"></div>';
        echo '<label class="lbDescripcion">'. $row["descripcion"].'</label>';
        echo '</div>'.'</div>';
    }
}
//INTERFAZ USUARIOS
function cargarDatosUsuarios(){
    $stmt = leerUsuarios();
    while ($row = $stmt->fetch()){
        echo '<div class="divUsuario">';
        echo '<p class="labUsuNickname">'.$row["nickname"].'</p>';
        echo '<a href="../php/perfil.php">';
        echo '<img class="imgPregPerfil" src="../img/default-user-image.png">';
        echo '</a>';
        echo '</div>';
    }
}
function leerRespuestas(){
    $dbh = iniciarConexion();
    $stmt = $dbh->prepare("SELECT * FROM Respuestas");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt;
}




