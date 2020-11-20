
<?php include 'header.view.php';?>

<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../html/css/pregunta.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body>
    <div id="divGeneralPregunta">

        <div id="divSuperior">

            <div id="divDatosUsuarioPregunta">
                <label id="nickUsuarioPregunta">Jaimito</label>
                <a><img id="imgPerfilPregunta" src="../img/default-user-image.png"></a>
            </div>

            <div id="divDatosPregunta">
                <label id="tituloPregunta">¿Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod?</label>
                <label id="detallesPregunta">Fecha: 22/11/2020</label>
                <p id="descripcionPregunta">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
            </div>

        </div>


        <div id="divInferior">
            <div id="divEscribir">
                <label id="lbTuRespuesta">Escribe un comentario:</label>
                <textarea id="textAreaTuRepuesta"></textarea>
                <input id="btEnviarRespuesta" type="button" value="- Publicar -">
            </div>

            <div id="divRespuestas">

            
                <div class="divRespuesta">
                    <div class="divDatosUsuarioRespuesta">
                        <label class="nickUsuarioRespuesta">Jaimito</label>
                        <a><img class="imgPerfilRespuesta" src="../img/default-user-image.png"></a>
                    </div>
        
                    <div class="divDatosRespuesta">
                        <label class="detallesRespuesta">Fecha: 22/11/2020</label>
                        <p class="descripcionRespuesta">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
                        <button class="botonResponder">Responder</button>
                    </div>
                </div>

                <div class="divRespuesta">
                    <div class="divDatosUsuarioRespuesta">
                        <label class="nickUsuarioRespuesta">Jaimito</label>
                        <a><img class="imgPerfilRespuesta" src="../img/default-user-image.png"></a>
                    </div>
        
                    <div class="divDatosRespuesta">
                        <label class="detallesRespuesta">Fecha: 22/11/2020</label>
                        <p class="descripcionRespuesta">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
                        <button class="botonResponder">Responder</button>
                    </div>
                </div>

                <div class="divRespuesta">
                    <div class="divDatosUsuarioRespuesta">
                        <label class="nickUsuarioRespuesta">Jaimito</label>
                        <a><img class="imgPerfilRespuesta" src="../img/default-user-image.png"></a>
                    </div>
        
                    <div class="divDatosRespuesta">
                        <label class="detallesRespuesta">Fecha: 22/11/2020</label>
                        <p class="descripcionRespuesta">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
                        <button class="botonResponder">Responder</button>
                    </div>
                </div>


            </div>
            
        </div>

    </div>
</body>
<?php include "footer.view.php"?>