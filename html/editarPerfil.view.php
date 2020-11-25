<?php include 'header.view.php';?>


<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../html/css/editarPerfil.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body>
    <div id="divPrincipal">
        <form method="post" action="../php/cambiarFoto.php" enctype="multipart/form-data">

            <div id="divGrid">
                <div id="divImg">
                    <img id="userImage" src="../img/default-user-image.png">
                    <input type="file" id="btEditarImagen" name="imagen">
                </div>

                <div id="divNick">
                    <label id="lbNick"> Nickname: </label>
                    <input id="ipNick" type="text">
                </div>

                <div id="divCorreo">
                    <label id="lbCorreo"> Correo: </label>
                    <input id="ipCorreo" type="text">
                </div>


                <div id="divDesc">
                    <label id="lbDesc"> Descripción: </label>
                    <textarea id="textAreaDesc"></textarea>
                </div>

                <div id="divButtonGuardar">
                    <button id="btGuardar">Guardar cambios</button>
                </div>

            </div>

            <div id="divPassword">

                <div id="divPassIn">
                    <label>Contraseña: </label>
                    <input type="password">
                </div>

                <div id="divPassIn">
                    <label>Repite la contraseña: </label>
                    <input type="password">
                </div>

                <button id="cambioPass">Cambiar contraseña</button>

            </div>

        </form>
    </div>
</body>
<?php include "footer.view.php"?>