<?php include 'header.view.php';?>

<body>
    <div id="divPrincipal">
        <div id="divSuperior">
            <!--Detalles de la página.-->
            <h1>Título de la página</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="divSeparador"></div>
        <div id="divInferior">
            <!--Div que contendrá tanto las preguntas como la sección con los enlaces.-->
            <div id="divEnlaces">
                <!--Botones que enlazarán con otras páginas.-->
                <button class="btEnlace btSeleccionado">Preguntas</button>
                <button class="btEnlace btNoSeleccionado">Usuarios</button>
                <button class="btEnlace btNoSeleccionado">Temas</button>
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
                            <option></option>
                            <option>Tema 2</option>
                            <option>Tema 3</option>
                            <option>Tema 4</option>
                            <option>Tema 5</option>
                            <option>Tema 6</option>
                        </select>
                    </div>
                </div>


                <div id="divPreguntas">
                    <!--Aquí se generarán las preguntas.-->

                    <!--LOS SIGUIENTES DIVS SE TENDRÁN QUE AUTOGENERAR-->
                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>

                    <div class="divPregunta">
                        <div class="divPregIzq">
                            <label class="labPregNickname">Jaimito</label>
                            <a href="https://www.w3schools.com">
                                <img class="imgPregPerfil" src="../img/default-user-image.png">
                            </a>
                        </div>

                        <div class="divPregDer">
                            <a href="http://www.google.es" class="tituloPreg">¿Título de una pregunta?</a>
                            <div class="divSeparadorpregunta"></div>
                            <label class="lbDescripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php include 'footer.view.php';?>

