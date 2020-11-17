$('.item1').on('click',function(){
    cargarDatosPerfilGeneral();
})
$('.item2').on('click',function()
{
    cargarDatosFavoritos();
})
function cargarDatosPerfilGeneral(){
    $.ajax({
        method: "GET",
        url: "../perfilGeneral.view.php",
    })
    .done(function ( php ){
        $("#contenedorPreguntas").append(php);
    })
}
function cargarDatosFavoritos(){
    $.ajax({
        method: "GET",
        url: "../perfilFavoritos.view.php",
    })
    .done(function ( php ){
        $("#contenedorFavoritos").append(php);
    })
}

/*Mal hecho*/