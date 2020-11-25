<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/header.js"></script>
    <link rel="stylesheet" href="../html/css/header.css">
    <link rel="stylesheet" href="../html/css/footer.css">
</head>
<body>
<header>

        <a href="../php/preguntas.php"><i id="iconHome" class="fas fa-home"></i></a>


        <label id="tituloAergibide">AERGIBIDE SL</label>

        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
                <i class="fas fa-user" id="iconUser"></i>
            </button>
            <div class="optperfil-content" id="myDropdown">

                <a href="#">Formular pregunta</a>
                <a href="../php/perfil.php">Perfil (NECESITAMOS SESIONES)</a>
                <a href="#">Notificaciones</a>
                <a href="../index.view.php" id="logout"><i class="fas fa-sign-out-alt"></i></a>

            </div>
        </div>


</header>

<?php
