<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/header.js"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/preguntas.css">
    <link rel="stylesheet" href="css/perfil.css">
</head>
<body>
<header>
    <nav id="navigation">
        <div class="opthome">
            <a href="preguntas.view.php"><i class="fas fa-home"></i></a>
        </div>
        <div id="parrafo">
            <p>AERGIBIDE SL</p>
        </div>

        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
                <i class="fas fa-user"></i>
            </button>
            <div class="optperfil-content" id="myDropdown">
                    <a href="#">Formular pregunta</a>
                    <a href="perfilGeneral.view.php">Perfil</a>
                    <a href="#">Notificaciones</a>
                    <a href="#">Configuración</a>
                    <a href="../index.view.php"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </nav>

</header>

<?php
