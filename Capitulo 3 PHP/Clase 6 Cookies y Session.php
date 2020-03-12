<?php

Ejercicio 1: Escribiendo Cookies

function guardarCookie() {
    setcookie("idioma","es", 0);
}

Ejercicio 2: Borrando Cookies

function eliminarCookie() {
    setcookie("idioma", "", -1);
}

Ejercicio 3: Idioma elegido

function guardarCookie() {
    setcookie("idioma",$_GET["idioma"], time() + 60 * 60 * 24 * 7);
}

Ejercicio 4: Guardando en SESSION

function guardarEnSession() {
    session_start();
    $_SESSION["usuarioLogueado"]="jonsnow";
}

Ejercicio 5: Leyendo de SESSION

function leerSession() {
    session_start();
    return $_SESSION["usuarioLogueado"];
}

Fin de archivo