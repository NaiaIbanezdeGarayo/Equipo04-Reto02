//import "../js/validaciones.js"
$(document).ready(function(){
    $('#btn').on('click',function(){
        try{
            if (!validarNombre($('#name').val())){
                throw "El nombre no es válido";
            }
            if (!validarApellido($('#surname1').val() && $('#surname2').val())){
                throw "El apellido no es válido";
            }
            if (!validarEmail($('#email').val())){
                throw "El email no es válido";
            }
            if (!validarNombreUsuario($('#user').val())){
                throw "El nombre de usuario no es válido";
            }
            if (!validarPass($('#pass1').val() && $('#pass2').val())){
                throw "La contraseña no es válida";
            }
        }catch (e){
            //alert(e);
        }
    })
})
