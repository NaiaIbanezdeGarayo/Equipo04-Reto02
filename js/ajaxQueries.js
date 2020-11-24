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
            alert(respuesta)
            if (respuesta === 1){
                $('#username').append("<p>Ya hay una cuenta con ese mismo nombre de usuario</p>");

                //Tengo que poner un display none y cuando se repita el nickname que se displaye
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
                alert(respuesta)
                if (respuesta === 1){
                    $('#email').append("<p>Ya hay una cuenta con ese mismo email</p>");
                }
            }
        })
}