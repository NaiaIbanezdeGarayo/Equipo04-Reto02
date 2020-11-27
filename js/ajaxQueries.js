$(document).ready(function (){

    $('#email').on('focusout', comprobarValidacionesEmail);
    $('#username').on('focusout', comprobarValidacionesNickname);
    $('#favorito').on('click', quitarFavorito);
    $('#noFavorito').on('click', ponerFavorito);
    //filtrar();
})
function comprobarValidacionesNickname(){
    var a = $('#username').val();
    $.ajax({
        type: "post",
        url: "../php/ajax.php",
        data: {
            action: "comprobarNickname",
            value: a
        },
        success: function (respuesta){
            if (respuesta == 1){
                $('#mensajeUsuario').css("display", "block");
                $('#username').val("");
            }else{
                $('#mensajeUsuario').css("display", "none");
            }
        }
    })
}
function comprobarValidacionesEmail(){
    var b = $('#email').val();
        $.ajax({
            type: "post",
            url: "../php/ajax.php",
            data: {
                action: "comprobarEmail",
                value: b
            },
            success: function (respuesta){
                if (respuesta == 1){
                    $('#mensajeEmail').css("display", "block");
                    $('#email').val("");
                }else{
                    $('#mensajeEmail').css("display", "none");
                }


            }
        })
}
function ponerFavorito(){
    var fav = $('#favorito')
}
function quitarFavorito(){

}
/*function filtrar(){
    var fechaDesc = $('#fechaDesc').on('click', function () {
        fechaDesc.val();
        $.ajax({
            type: "post",
            url: "../php/ajax.php",
            data: {
                action: "filtrarFechaDesc",
                value: fechaDesc
            },
            success: function (respuesta) {
                if (respuesta == 1){

                }
            }
        })
    })
    var fechaAsc = $('#fechaAsc').on('click', function () {
        fechaAsc.val();
        $.ajax({
            type: "post",
            url: "../php/ajax.php",
            data: {
                action: "filtrarFechaDesc",
                value: fechaDesc
            },
            success: function (respuesta) {
                if (respuesta == 1){

                }
            }
        })
    })
}*/