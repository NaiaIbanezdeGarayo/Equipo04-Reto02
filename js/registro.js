import "../js/validaciones.js"

$(document).ready(function(){
    $('#btn').on('click',function(){
        try{
            if (!validarNombre($('#name').value)){
                throw "El nombre no es válido";
            }
            if (!validarApellido($('#surname1').value && $('#surname2').value)){
                throw "El apellido no es válido";
            }
            if (!validarEmail($('#email').value)){
                throw "El email no es válido";
            }
            if (!validarNombreUsuario($('#user').value)){
                throw "El nombre de usuario no es válido";
            }
            if (!validarPass($('#pass1').value && $('#pass2').value)){
                throw "La contraseña no es válida";
            }
        }catch (e){
            alert(e);
        }
    })
})
