$("#btEnviarRespuesta").on("click", function(){
    cargarDatos();
});

function cargarDatos(){

    //PARA MANTENER LOS DATOS DEL _GET
    var parts = window.location.search.substr(1).split("&");
    var $_GET = {};

    for (var i = 0; i < parts.length; i++) {
        var temp = parts[i].split("=");
        $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
    }


    let comentario = document.getElementById("textAreaTuRepuesta").value;

    var parametros = {
        "comentario" : comentario
    }


    $.ajax({
        data: parametros,
        url: "../php/pregunta.php?pregunta=" + $_GET["pregunta"],
        type: "post",

        success: function (response) {
           // alert("Éxito:" + response);
            location.reload();
        },
        error: function (response) {
            alert("Ha ocurrido un error")
        }

    });

}