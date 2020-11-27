$("#btPublicar").on("click", function(){
    cargarDatos();
});

function cargarDatos(){

    let titulo = document.getElementById("txtTitulo").value;
    let descripcion= document.getElementById("textAreaDesc").value;
    let tema = parseInt(document.getElementById("selectTema").value);

    var parametros = {
        "titulo" : titulo,
        "descripcion" : descripcion,
        "tema" : tema
    }

    $.ajax({
        data: parametros,
        url: "../php/crearPregunta.php",
        type: "post",

        success: function (response) {
            //alert("Éxito:" + response);
            document.location.href = "../php/preguntas.php";
        },
        error: function (response) {
            //alert("Ha ocurrido un error")
        }

    });

}