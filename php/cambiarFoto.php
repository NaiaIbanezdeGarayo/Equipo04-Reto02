<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
//Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];
$extension = pathinfo($nombre_img, PATHINFO_EXTENSION);

//Si existe imagen y tiene un tamaño correcto
if (($_FILES["imagen"]["type"] == "image/gif")
    || ($_FILES["imagen"]["type"] == "image/jpeg")
    || ($_FILES["imagen"]["type"] == "image/jpg")
    || ($_FILES["imagen"]["type"] == "image/png"))
{
    $directorio = $_SERVER['DOCUMENT_ROOT'].'../img/imgusers/';

    move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$_SESSION["username"].$extension);
    require "../php/llamadasBD.php";
    $dbh = iniciarConexion();
    $stmt = $dbh->prepare("UPDATE Usuarios SET imagen = '$nombre_img'");
    $stmt->execute();
    $dbhf = finalizarConexion();
    require "../php/editarPerfil.php";
    $stmts = $dbh->prepare("SELECT * FROM Usuarios");
    while ($row = $stmts->fetch()){
        $ruta_img = $row["imagen"];
    }

}else{
    echo "No se puede subir una imagen con este formato";
}


