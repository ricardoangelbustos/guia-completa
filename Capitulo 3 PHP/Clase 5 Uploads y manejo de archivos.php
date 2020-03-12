<?php

Ejercicio 1: Validando un archivo

function validarAvatar() {
    if($_FILES["avatar"]["error"] != 0){
      return false;
    }
    else{
      return true;
    }
}

Ejercicio 2: Validando extensiones

function validarExtension() {
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
      return false;
    }
    else{
      return true;
    }
}

Ejercicio 3: Subida de archivos

function subirAvatar() {
    $ext=pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "img/avatar." . $ext);
}

Ejercicio 4: Encriptando

function encriptar($textoPlano) {
    $hash=password_hash($textoPlano, PASSWORD_DEFAULT);
    return $hash;
}

Ejercicio 5: Verificando contraseñas

function verificarPass($hash) {
    $test=password_verify($_POST["password"], $hash);
    return $test;
}

Ejercicio 6: Te transformarás en...JSON!

function aJSON($unArray) {
    $json=json_encode($unArray);
    return $json;
}

Ejercicio 7: El camino inverso

function aArray($unJSON) {
    $arrayOriginal=json_decode($unJSON, true);
    return $arrayOriginal;
}

Ejercicio 8: Yendo y viniendo

function agregarUsuario($jsonUsuarios, $usuarioNuevo) {
    $arrayOriginal=json_decode($jsonUsuarios, true);
    $arrayOriginal[]=$usuarioNuevo;
    $resultado=json_encode($arrayOriginal);
    return $resultado;
}

Ejercicio 9: Escribiendo un archivo

function escribirArchivo() {
    file_put_contents("prueba.txt", "Mi primer archivo!");
}

Ejercicio 10: Leyendo un archivo

function leerArchivo($archivo) {
    return file_get_contents("$archivo");
}

Ejercicio 11: Guardando un usuario

function crearUsuario() {
    $usuario = [
      "email" => $_POST["email"],
      "username" => $_POST["username"],
      "password" => password_hash($_POST["password"],PASSWORD_DEFAULT)
    ];
  
    $usuarios = file_get_contents("usuarios.json");
    $usuariosArray = json_decode($usuarios, true);
  
    $usuariosArray[]=$usuario;
  
    $usuariosFinal = json_encode($usuariosArray);
  
    file_put_contents("usuarios.json", $usuariosFinal);
}

Ejercicio 12: Buscando por email

function buscarPorEmail($email) {
    $usuarios=file_get_contents("usuarios.json");
    $usuariosArray=json_decode($usuarios,true);
    for ($i=0 ; $i<count($usuariosArray); $i++){
      foreach($usuariosArray[$i] as $nombre => $valor){
        if($valor==$email){
          return $usuariosArray[$i];
        }
      }
    }
}

Fin de archivo