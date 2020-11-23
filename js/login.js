//Prueba 1
/*$(function(){
	$('#errDiv').hide();
	$('#logInfrm').submit(function(e){
		e.preventDefault();
		$.post("/../php/login.php",$('#logInfrm').serialize(),function(data){
			$('#errDiv').show('slow');
			if(data){
				$('#errDiv').text('Sesion iniciada');
			} else {
				$('#errDiv').text('Usuario o Contraseña erroneos.');
			}
		},"jason");
	});
});*/

//Prueba 2
/*function enviar() { 
    var messages = document.querySelector(".messages");
 
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(res){     
        messages.innerHTML = "";
    }    
    xhr.onload = function () {      
        if (xhr.status == 200) {
            let res = JSON.parse(this.responseText);
            //console.log(res);     
            (res.access) ? messages.innerHTML = "login correcto" : messages.innerHTML = "login incorrecto";
        }
    }
    xhr.open('post', 'php/login.php', true);
 
    // prepare FormData()
    let form = document.querySelector("#login_form");     
    data = new FormData(form);    
    //data.append('origin', "login"); // campo adiccional     
    
    // Send Request
    xhr.send(data);
 
}*/
/*
$(document).ready(function(){
		$("#btn").click(function(){
			alert('Todo bien');
		});
});*/

//Prueba 3
$(document).ready(function(){
	$("#login-form").bind("submit",function(){
		$.ajax({
			type:$(this).attr("method"),
			url:$(this).attr("action"),
			data:$(this).serialize(),
			success:function(){
				alert("Conectado");
			},
			error:function(){
				alert("Ha ocurrido algun error.");
			}
		});
		
		return false;
	});
});