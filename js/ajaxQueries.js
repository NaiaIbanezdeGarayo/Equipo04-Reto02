$(document).ready(function (){
    comprobarValidacionesNickname();
    comprobarValidacionesEmail();
})
function comprobarValidacionesNickname(){
    user = validarNombreUsuario($('#username').val());
    if (user === true){

    }
}
function comprobarValidacionesEmail(){
   email = validarEmail($('#email').val());
    if (email === true){
        $.ajax({
            type: "post",
            url: "../php/ajax.php",
            data: {action: "comprobarEmail"},
            success: function (respuesta){
                if (respuesta === 1){
                    $('#email').appendChild("<p>Ya hay una cuenta con ese mismo email</p>");
                }
            }
        })
    }
}