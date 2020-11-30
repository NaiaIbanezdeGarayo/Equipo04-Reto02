
<?php include 'header.view.php';?>


<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../html/css/temas.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body>

<div id="divPrincipal">
    <div id="divSuperior">
        <!--Detalles de la página.-->
        <h1>Temas</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="divSeparador"></div>

    <div id="divInferior">
        <!--Div que contendrá tanto las preguntas como la sección con los enlaces.-->

        <div id="divEnlaces">
            <!--Botones que enlazarán con otras páginas.-->
            <button class="btEnlace btNoSeleccionado"><a href="../php/preguntas.php">Preguntas</a></button>
            <button class="btEnlace btNoSeleccionado"><a href="../php/usuarios.php">Usuarios</a></button>
            <button class="btEnlace btSeleccionado"><a href="../php/temas.php">Temas</a></button>
        </div>

        <div id="divInformacion">

            <div id="divFiltrador">
                <!--Lupa y filtro por tema.-->
                <div id="divLupa">
                    <label class="lbFiltrado">Búsqueda: </label>
                    <input class="ipBuscador" type="text">
                    <button id="btBuscar">Buscar</button>
                </div>

            </div>


            <div id="divTemas">
                <!--Aquí se generarán las preguntas.-->
                
                <!--LOS SIGUIENTES DIVS SE TENDRÁN QUE AUTOGENERAR-->
                <div class="divTema">    
                        <a href="../php/preguntas.php?tema=1" class="tituloTema">GENERAL</a>
                        <div class="divSeparadorTema"></div>
                        <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                </div>

                <div class="divTema">    
                    <a href="../php/preguntas.php?tema=2" class="tituloTema">PROGRAMACIÓN</a>
                    <div class="divSeparadorTema"></div>
                    <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                </div>

                <div class="divTema">    
                    <a href="../php/preguntas.php?tema=3" class="tituloTema">PRODUCCIÓN</a>
                    <div class="divSeparadorTema"></div>
                    <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                </div>

                <div class="divTema">    
                    <a href="../php/preguntas.php?tema=4" class="tituloTema">MONTAJE</a>
                    <div class="divSeparadorTema"></div>
                    <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                </div>

                <div class="divTema">    
                    <a href="../php/preguntas.php?tema=5" class="tituloTema">RECURSOS HUMANOS</a>
                    <div class="divSeparadorTema"></div>
                    <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                </div>

                <div class="divTema">    
                    <a href="../php/preguntas.php?tema=6" class="tituloTema">MANTENIMIENTO</a>
                    <div class="divSeparadorTema"></div>
                    <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                </div>

            

            </div>

        </div>

    </div>
</div>

</body>
<?php include "footer.view.php"?>

