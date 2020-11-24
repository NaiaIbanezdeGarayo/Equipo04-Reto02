$("#btPublicar").on("click", function(){
    cargarDatos();
});

function cargarDatos(){

    let titulo = document.getElementById("txtTitulo").value;
    let descripcion= document.getElementById("textAreaDesc").value;
    let tema = 0;
    /*
        $.ajax({

            type: "POST",
            url: "../php/ajaxPHP/crearPreguntaAJAX.php",

            data: {"titulo": titulo,
                    "descripcion": descripcion,
                    "tema" : tema},

            //data: {"titulo": titulo},

            success: function (response) {
                alert(response);
            },
            error: function () {
                alert("Error")
            }


        })

        */

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
            alert("Éxito:" + response);
        },
        error: function (response) {
            alert("Error: " + response)
        }

    });




}