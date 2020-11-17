<?php


/*TEMPORAL HASTA TENER UNA BASE DE DATOS*/

function iniciarConexion(){
    //Aquí abriríamos la conexión con MySQL.
}

function finalizarConexion(){
    //Aquí cerraríamos la conexión con MySQL.
}


function leerPreguntas(){

    /*Llamadas de BD*/

    $preguntas = [
        "001" => [
            "titulo" => "¿No funciona el wifi?",
            "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "fecha" => "16-11-2020",
            "tema" => 0,
            "idUsuario" => "002"
        ],

        "002" => [
            "titulo" => "¿El servidor está encendido?",
            "descripcion" => "No logro conectarme... ",
            "fecha" => "16-11-2020",
            "tema" => 0,
            "idUsuario" => "001"
        ],

        "003" => [
            "titulo" => "El ordenador 35 tiene un pantallazo azúl",
            "descripcion" => "No logro conectarme... ",
            "fecha" => "16-11-2020",
            "tema" => 0,
            "idUsuario" => "003"
        ]
    ];


    return $preguntas;
}


function leerUsuarios(){

    /*Llamadas de BD*/

    $usuarios = [
        "001" => [
            "tipoUsuario" => 1,
            "nickname" => "Juan88",
            "password" => "1234",
            "nombre" => "Juan",
            "apellido1" => "Gonzalez",
            "apellido2" => "Lorca",
            "email" => "juan@aergibide.org",
            "descripcion" => "Me llamo Juan y trabajo en mantenimiento.",
            "urlImg" => "../img/default-user-image.png"
        ],

        "002" => [
            "tipoUsuario" => 1,
            "nickname" => "Pedro76",
            "password" => "5678",
            "nombre" => "Pedro",
            "apellido1" => "Jimenez",
            "apellido2" => "Blanco",
            "email" => "pedro@aergibide.org",
            "descripcion" => "Me llamo Pedro y trabajo en recursos humanos.",
            "urlImg" => "../img/default-user-image.png"
        ],

        "003" => [
            "tipoUsuario" => 1,
            "nickname" => "Antonio67",
            "password" => "1111",
            "nombre" => "Antonio",
            "apellido1" => "Delgado",
            "apellido2" => "Elias",
            "email" => "antonio@aergibide.org",
            "descripcion" => "Me llamo Antonio y trabajo en ingeniería.",
            "urlImg" => "../img/default-user-image.png"
        ]
    ];


    return $usuarios;
}


