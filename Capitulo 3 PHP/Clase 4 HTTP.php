<?php

Ejercicio 1: GET de un producto

function describirProducto() {
  return "producto ".$_GET["id"];
}

Ejercicio 2: Saludando al usuario por GET

function saludar() {
  return "Hola ".$_GET["nombre"]." ".$_GET["apellido"];
}

Ejercicio 3: ¿Qué buscaste?

function busqueda() {
  if (isset($_GET["ordenar"])){
    return "El termino buscado es " . $_GET["busqueda"] ." ordenado por " . $_GET["ordenar"];
  }else{
    return "El termino buscado es " . $_GET["busqueda"];
  }
}

Ejercicio 4: Y ahora por POST

function bienvenida() {
  return "Bienvenido ". $_POST["usuario"].". Ha sido registrado con el email ". $_POST["email"];
}

Ejercicio 5: Campos optativos

function bienvenida() {
  if(strlen($_POST["usuario"]) != 0){
    return "Bienvenido " .$_POST["usuario"].". Ha sido registrado con el email ". $_POST["email"]; 
  }
  else{
    return "Bienvenido " .$_POST["email"];
  }
}

Ejercicio 6: Validando un nombre

function validarNombre() {
  if(strlen($_POST["nombre"]) == 0){
    return false;
  }
  else{
    return true;
  }
}

Ejercicio 7: Validando un usuario

function validarUsername() {
  if(strlen($_POST["username"]) < 5){
    return false;
  }
  else{
    return true;
  }
}

Ejercicio 8: Mayor de edad

function validarEdad() {
  if(is_integer($_POST["edad"]) && ($_POST["edad"]) >= 18){
    return true;
  }
  else{
    return false;
  }
}

Ejercicio 9: Validando un email

function validarEmail() {
  if (strlen($_POST["email"])==0){
    return "El campo esta vacio";
  }
  if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    return "El campo no es un email";
  }
  else{
    return "Correcto";
  }
}

Ejercicio 10: Validando contraseñas

function validarPass() {
  if ((strlen($_POST["password"]) == 0) && (strlen($_POST["confirmar"]) == 0))  {
    return "Los dos campos de contraseña estan vacios";
  }
  if (strlen($_POST["password"]) == 0) {
    return "La contraseña esta vacia";
  }
  if (strlen($_POST["confirmar"]) == 0) {
    return "Falta la confirmacion de contraseña";
  }
  if ($_POST["password"] != $_POST["confirmar"]) {
    return "Las contraseñas no verifican";
  } else { 
    return "Correcto";
  }
}

Fin de archivo