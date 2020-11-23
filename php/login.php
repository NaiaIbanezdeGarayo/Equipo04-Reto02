<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../php/llamadasBD.php';



//Abrimos la conexión con la base de datos.
$db = iniciarConexion();


//Cerramos la conexión
finalizarConexion();

require "../index.view.php";

//Prueba 1
	/*
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	$conexion = mysql_connect('localhost', getUser(), getPass());
	mssql_select_db('db_reto2');
	$query = sprintf("SELECT * FROM Usuarios WHERE nickname='%s' and password='%s'", $user, $pass);
	$result = mysql_query($query);
	$datos = mysql_fetch_row($result);
	mysql_close($conexion);
	
	if($datos != null){
		echo json_encode('datos');
		exit;
	} else  {
		echo json_encode(null);
		exit;
	}*/
	
	//Prueba 2
	/*header('Content-Type: application/json');
	sleep(2);
	// check data vs DB
	$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);;
	$pass = filter_input(INPUT_POST, 'pass');
	$origin = filter_input(INPUT_POST, 'origin', FILTER_SANITIZE_STRING);
	 
	($user == "test" && $pass == "1234" ) ? $btn = true : $btn = false;
	 
	// return data to debug
	echo json_encode([
		'user' => $user,
		'pass' => $pass,
		'origin' => $origin,
		'btn' => $btn
	]);*/
	
	//Prueba 3
	$usuario = $_POST['user'];
    $contrasena = $_POST['pass'];
    session_start();
    $_SESSION['user']= $usuario;

    //Conectar a la base de datos
    $conexion=mysqli_connect("localhost", "admin", "12345", "db_reto2");
		mysqli_set_charset($conexion,'utf8');
    $consulta="SELECT * FROM usuarios WHERE nickname = '$usuario' and password = '$contrasena' ";
    $resultado=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);

    if ($filas>0) {
           header("Location: ../index.view.php ");
    }
    else {
        echo '<script>alert("El Usuario y la Contraseña no coinciden");
        window.history.go(-1);
        </script>';
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

