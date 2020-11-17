$(document).ready(function(){
    $('#btn').on('click',function(){
        try{
            if (!validarNombre()){
                throw "El nombre no es válido";
            }
            if (!validarApellido()){
                throw "El apellido no es válido";
            }
            if (!validarEmail()){
                throw "El email no es válido";
            }
            if (!validarNombreUsuario()){
                throw "El nombre de usuario no es válido";
            }
            if (!validarPass()){
                throw "La contraseña no es válida";
            }
        }catch (e){
            alert(e);
        }
    })
})



function validarNombre(){
    let name = $('#name').value;
    let expreg = new RegExp("^([A-Z][a-z]{1,})+$");
    if (expreg.test(name)){
        return true
    }else
        return false
}
function validarApellido(){
    let surname1 = $('#surname1').value;
    let surname2 = $('#surname2').value;
    let expreg = new RegExp("^([A-Z][a-z]{1,}([ ][A-z]{1,})*)");
    if(expreg.test(surname1) && expreg.test(surname2)){
        return true
    }else
        return false
}
function validarEmail(){

}
function validarNombreUsuario(){

}
function validarPass(){
    let pass1 = $('#pass1').value;
    let pass2 = $('#pass2').value;
    /*Expresiones regulares*/
    if (pass1 === pass2){
        if ()
    }
}
