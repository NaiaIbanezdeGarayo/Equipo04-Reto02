
<?php include 'header.view.php';?>

<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../html/css/preguntas.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/ajaxQueries.js"></script>
</head>

<body>

<div id="divPrincipal">
    <div id="divSuperior">
        <!--Detalles de la página.-->
        <h1>Preguntas</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="divSeparador"></div>

    <div id="divInferior">
        <!--Div que contendrá tanto las preguntas como la sección con los enlaces.-->

        <div id="divEnlaces">
            <!--Botones que enlazarán con otras páginas.-->
            <button class="btEnlace btSeleccionado"><a href="../php/preguntas.php">Preguntas</a></button>
            <button class="btEnlace btNoSeleccionado"><a href="../php/usuarios.php">Usuarios</a></button>
            <button class="btEnlace btNoSeleccionado"><a href="../php/temas.php">Temas</a></button>
        </div>

        <div id="divInformacion">

            <div id="divFiltrador">
                <!--Lupa y filtro por tema.-->
                <div id="divLupa">
                    <label class="lbFiltrado">Búsqueda: </label>
                    <input class="ipBuscador" type="text">
                    <button id="btBuscar">Buscar</button>
                </div>

                <div id="divTag">
                    <label class="lbFiltrado">Tema: </label>
                    <select>
                        <option>--Elige un tema--</option>
                        <option>General</option>
                        <option>Programación</option>
                        <option>Producción</option>
                        <option>Montaje</option>
                        <option>Recursos humanos</option>
                        <option>Mantenimiento</option>
                    </select>
                </div>

                <div id="divTag">
                    <label class="lbFiltrado">Ordenar: </label>
                    <select id="slOrden">
                        <option id="fechaDesc" selected value="fechaDesc">Fecha ↑</option>
                        <option id="fechaAsc" value="fechaAsc">Fecha ↓</option>
                        <option>Respuestas</option>
                        <option>Favoritos</option>
                    </select>
                </div>

            </div>


            <div id="divPreguntas">
                <!--Aquí se generarán las preguntas.-->
                <?php foreach ($preguntasConUsuarios as $pregunta) { ?>
                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname"> <?php echo $pregunta ["nickname"]; ?> </label>
                            <a href="../php/perfil.php?nickname=<?php echo $pregunta["nickname"]?>">
                                <img class="imgPregPerfil" src="<?php echo $pregunta["urlImg"]; ?>">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a class="tituloPreg" href="../php/pregunta.php?pregunta=<?php echo $pregunta["id"]?>">
                                <?php echo $pregunta["titulo"] ?>
                            </a>
                            <div class="divSeparadorpregunta"></div>
                            <label style="font-size: 15px"> <?php echo $pregunta["fecha"]; echo " - Tema: "; echo $pregunta["tema"]?> </label>
                            <label class="lbDescripcion"><?php echo $pregunta["descripcion"] ?></label>
                        </div>

                    </div>
                <?php } ?>


              

            </div>

        </div>

    </div>

    <script src="../js/pregunta.js"></script>
</div>

</body>
<?php include "footer.view.php"?>