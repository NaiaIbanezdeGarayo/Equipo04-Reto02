<?php include 'header.view.php';?>


<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../html/css/editarPerfil.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body>
    <div id="divPrincipal">

        <div id="divGrid">
            <div id="divImg">
                <img id="userImage" src="../img/default-user-image.png">
                <button id="btEditarImagen" value="">Seleccionar imagen</button>
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

            <button>Cambiar contraseña</button>

        </div>

    </div>
</body>
<?php include "footer.view.php"?>