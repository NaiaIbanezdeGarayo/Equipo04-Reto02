$(document).ready(function (){

    $('#email').on('focusout', comprobarValidacionesEmail);
    $('#username').on('focusout', comprobarValidacionesNickname);
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