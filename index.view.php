<!DOCTYPE html>
<html>
<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../html/css/login.css">
    <link rel="stylesheet" href="../html/css/preguntas.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="/js/ajaxQueries.js"></script>
</head>
<body>
    <div id="divgeneral">
        <h1>¡BIENVENIDO A AERGIBIDE SL!</h1>
        <h2>Inicio de sesión</h2>
        <form action="/php/login.php" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="user" id="user" placeholder="Usuario"><br>

            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="pass" id="pass" placeholder="Contraseña"><br>

            </div>
            <input type="submit" name="accederLogin" id="btn">
        </form>
        <a href="">¿Has olvidado la contraseña?</a><br>
        <a href="/php/signup.php" id="botom">No tengo cuenta. Crear Cuenta</a>
        <p id="mensajeUsuarioPass">El usuario o contraseña introducida es incorrecta</p>
    </div>
</body>
</html>

