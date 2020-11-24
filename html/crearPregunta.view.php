<?php include 'header.view.php';?>

<head>
    <title>AERGIBIDE SL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../html/css/crearPregunta.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script src="../js/jquery-3.5.1.js"></script>
</head>

<body>


    <div id="divPrincipal">
        <label id="lbSuperior">NUEVA PREGUNTA</label>

        <div id="divTitulo">
            <label id="lbTitulo">Titulo: </label>
            <input id="txtTitulo" type="text">
        </div>

        <div id="divDescripcion">
            <label id="lbDesc">Descripción: </label>
            <textarea id="textAreaDesc"></textarea>
        </div>

        <div id="divTema">
            <label id="lbTema">Tema: </label>
            <select id="selectTema">
                <option value="1">JavaScript</option>
                <option value="2">PHP</option>
                <option value="3">CSS</option>
                <option value="4">Mantenimiento</option>
            </select>
        </div>


        <div id="divBotones">
            <button>- Cancelar -</button>
            <button id="btPublicar">- Publicar -</button>
        </div>

        <script src="../js/crearPregunta.js"></script>
        
    </div>

</body>
<?php include "footer.view.php"?>