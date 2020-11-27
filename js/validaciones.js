function validarNombre(name){
    let expreg = new RegExp("^([A-Z][a-z]{1,})+$");
    if (expreg.test(name)){
        return true
    }else
        return false
}
function validarApellido(surname1,surname2){
    let expreg = new RegExp("^([A-Z][a-z]{1,}([ ][A-z]{1,})*)");
    if(expreg.test(surname1) && expreg.test(surname2)){
        return true
    }else
        return false
}
function validarEmail(email){
    let expreg = new RegExp("^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@aergibide.org");
    if (expreg.test(email)){
        return true
    }else
        return false
}
function validarNombreUsuario(user){
    let expreg = new RegExp("")
}
function validarPass(pass1,pass2){
    let expreg = new RegExp("^([A-z0-9]{1,}[@._]{1,})*");
    if (pass1 === pass2){
        if (expreg.test(pass1)){
            return true
        }else
            return false
    }
}
