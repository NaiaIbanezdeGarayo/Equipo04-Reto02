$(document).ready(function (){

    $('#email').on('focusout', comprobarValidacionesEmail);
    //$('#username').on('focusout', comprobarValidacionesNickname());
})
function comprobarValidacionesNickname(){
    user = validarNombreUsuario($('#username').val());
    if (user === true){

    }
}
function comprobarValidacionesEmail(){
   //email = validarEmail();
    var a = $('#email').val();
    //if (email === true){
        $.ajax({
            type: "post",
            url: "../php/ajax.php",
            data: {action: "comprobarEmail", value: a },
            success: function (respuesta){
                alert(respuesta)
                if (respuesta === 1){
                    $('#email').appendChild("<p>Ya hay una cuenta con ese mismo email</p>");
                }
            }
        })
   // }
}