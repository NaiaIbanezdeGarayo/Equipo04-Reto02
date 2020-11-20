<?php include 'header.view.php';?>
    <main>
        <section id="sectionGeneral">
            <article id="articleDatosUsuario">
                <img src="../img/default-user-image.png">
                <a href="editarpefil.view.php">Editar perfil <i class="fas fa-pencil-alt"></i></a>
                <p>Nombre Apellido</p>
                <p>Usuario</p>
                <p>Descripción</p>
            </article>
        </section>
        <section class="sectionPreg">
            <article id="articleMenu">
                <div class="items">
                    <input type="button" class="item item1" value="GENERAL">
                    <input type="button" class="item item2" value="">
                </div>
            </article>
            <div id="contenedorPreguntas">
            <!--Carga datos-->
            </div>
            <div id="contenedorFavoritos">
                <!--Carga datos-->
            </div>
        </section>
    </main>
<script src="../js/ajaxQueries.js"></script>
<?php include 'footer.view.php';?>