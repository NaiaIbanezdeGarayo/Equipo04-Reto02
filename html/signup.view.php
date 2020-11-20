<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AERGIBIDE SL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../html/css/signup.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </head>
    <body>
    <div id="divgeneral">
        <h1>¡BIENVENIDO A AERGIBIDE SL!</h1>
        <p><?php echo iniciarConexion()?></p>
        <form action="">
            <h2>Crear cuenta</h2>
            <div class="textbox">
                <label for="name">Nombre:</label><br>
                <input id="name" maxlength="30" type="text" placeholder="Nombre" class="text" required><br>
            </div>
            <div class="textbox">
                <label for="surname1">Primer apellido:</label><br>
                <input id="surname1" maxlength="40" type="text" placeholder="Primer apellido" required><br>
            </div>
            <div class="textbox">
                <label for="surname2">Segundo apellido:</label><br>
                <input id="surname2" maxlength="40" type="text" placeholder="Segundo apellido" required><br>
            </div>
            <div class="textbox">
                <label for="birth">Fecha de nacimiento:</label><br>
                <input id="birth" type="date" required><br>
            </div>
            <div class="textbox">
                <label for="description">Descripción:</label><br>
                <textarea id="description" maxlength="500" placeholder="Escribe algo sobre ti" required></textarea><br>
            </div>
            <div class="textbox">
                <label for="email">Email:</label><br>
                <input id="email" type="text" maxlength="64" placeholder="Email" required><br>
            </div>
            <div class="textbox">
                <label for="username">Nombre usuario:</label><br>
                <input id="username" type="text" maxlength="40" placeholder="Usuario" required><br>
            </div>
            <div class="textbox">
                <label for="pass1">Introduce una contraseña:</label><br>
                <input type="pass1" id="pass1" maxlength="30" placeholder="Contraseña" required><br>
            </div>
            <div class="textbox">
                <label for="pass2">Repite la contraseña:</label><br>
                <input type="pass2" id="pass2" maxlength="30" placeholder="Contraseña" required><br>
            </div>
            <input type="submit" name="accederSignUp" id="btn">
        </form>
        <a href="../index.view.php">Volver a inicio de sesión</a>
    </div>
    <script src="../js/registro.js"></script>
    </body>
</html>


