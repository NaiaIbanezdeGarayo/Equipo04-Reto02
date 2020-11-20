<!DOCTYPE html>
<html>
<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="html/css/login.css">
    <link rel="stylesheet" href="html/css/preguntas.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div id="divgeneral">
        <h1>¡BIENVENIDO A AERGIBIDE SL!</h1>
        <h2>Inicio de sesión</h2>
        <form action="/php/login.php" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="user" id="user" placeholder="Usuario"><br>
                <?= $user = $_POST['user'] ?>
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="pass" id="pass" placeholder="Contraseña"><br>
                <?= $pass = $_POST['pass'] ?>
            </div>
            <input type="submit" name="accederLogin" id="btn">
        </form>
        <a href="">¿Has olvidado la contraseña?</a><br>
        <a href="html/signup.view.php" id="botom">No tengo cuenta. Crear Cuenta</a
    </div>
</body>
</html>
<?php
