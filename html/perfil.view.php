<?php include 'header.view.php';?>

<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../html/css/perfil.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body>

    <div id="divPrincipal">

        <div id="divIzq">
            <div id="divBotones">
                <button>General</button>
                <button>Favoritos</button>
            </div>

            <div id="divPreguntas">
                <?php foreach ($preguntasUsuario as $pregunta) { ?>
                <div class="divPregunta">
                    <a href="../php/pregunta.php?idPregunta=<?php echo $pregunta["id"]?>" class="tituloPreg"><?php echo $pregunta["titulo"];?></a>
                    <div class="divDescripcion">
                        <p><?php echo $pregunta["descripcion"]; ?></p>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>

        <div id="divDer">
            <label id="lbNickname"><?php echo $usuarioPerfil[0]["nickname"] ?></label>
            <img id="imgPerfil" src="<?php echo $usuarioPerfil[0]["imagen"];?>">
            <label id="lbNombre"><?php echo $usuarioPerfil[0]["nombre"];echo " "; echo $usuarioPerfil[0]["apellido1"]?></label>
            <label id="lbDescripcion"><?php echo $usuarioPerfil[0]["descripcion"] ?></label>
        </div>
    </div>

</body>

<?php include 'footer.view.php';?>

