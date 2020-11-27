
<?php include 'header.view.php';?>

<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../html/css/pregunta.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/ajaxQueries.js"></script>

</head>

<body>
    <div id="divGeneralPregunta">

        <div id="divSuperior">

            <div id="divDatosUsuarioPregunta">
                <label id="nickUsuarioPregunta"><?php echo $usuario["nickname"];?></label>
                <a href="../php/perfil.php?nickname=<?php echo $usuario["nickname"]?>">
                    <img id="imgPerfilPregunta" src="<?php echo $usuario["imagen"];?>">
                </a>
            </div>

            <div id="divDatosPregunta">
                <label id="tituloPregunta"><?php echo $pregunta["titulo"];?></label>
                <label id="detallesPregunta"> Fecha: <?php echo $pregunta["fecha"];?></label>
                <p id="descripcionPregunta"><?php echo $pregunta["descripcion"];?></p>
            </div>

        </div>


        <div id="divInferior">
            <div id="divEscribir">
                <label id="lbTuRespuesta">Escribe un comentario:</label>
                <textarea id="textAreaTuRepuesta"></textarea>
                <input id="btEnviarRespuesta" type="button" value="- Publicar -">
            </div>

            <div id="divRespuestas">

                <?php foreach ($respuestasConUsuarios as $respuesta) { ?>
                <div class="divRespuesta">
                    <div class="divDatosUsuarioRespuesta">
                        <div class="iconFavoritos">
                            <i class="fas fa-star" id="favorito"><?php $pregunta["id"]."-".$respuesta["id"]?></i>
                        </div>

                        <label class="nickUsuarioRespuesta"><?php echo $respuesta["nickname"]; ?></label>
                        <a href="../php/perfil.php?nickname=<?php echo $respuesta["nickname"]?>"><img class="imgPerfilRespuesta" src="<?php echo $respuesta["urlImg"];?>"></a>
                    </div>
        
                    <div class="divDatosRespuesta">
                        <label class="detallesRespuesta">Fecha: <?php echo $respuesta["fecha"]; ?></label>
                        <p class="descripcionRespuesta"><?php echo $respuesta["comentario"]; ?></p>
                        <button class="botonResponder">Responder</button>
                    </div>
                </div>
                <?php } ?>



            </div>
            
        </div>

        <script src="../js/pregunta.js"></script>

    </div>
</body>
<?php include "footer.view.php"?>