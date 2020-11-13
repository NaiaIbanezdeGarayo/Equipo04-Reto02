<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AERGIBIDE SL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>
    <div id="divgeneral">
        <h1>¡BIENVENIDO A AERGIBIDE SL!</h1>
        <form action="">
            <h2>Crear cuenta</h2>
            <div class="textbox">
                <label for="name">Nombre:</label><br>
                <input id="name" type="text" placeholder="Nombre"><br>
            </div>
            <div class="textbox">
                <label for="surname">Apellidos:</label><br>
                <input id="surname" type="text" placeholder="Apellidos"><br>
            </div>
            <div class="textbox">
                <label for="birth">Fecha de nacimiento:</label><br>
                <input id="birth" type="date"><br>
            </div>
            <div class="textbox">
                <label for="username">Nombre usuario:</label><br>
                <input id="username" type="text" placeholder="Usuario"><br>
            </div>
            <div class="textbox">
                <label for="pass1">Introduce una contraseña:</label><br>
                <input type="password" id="pass1" placeholder="Contraseña"><br>
            </div>
            <div class="textbox">
                <label for="pass2">Repite la contraseña:</label><br>
                <input type="password" id="pass2" placeholder="Contraseña"><br>
            </div>
            <input type="submit" name="Enviar" id="btn">
        </form>
        <a href="../index.view.php">Volver a inicio de sesión</a>
    </div>

    </body>
</html>
<?php
