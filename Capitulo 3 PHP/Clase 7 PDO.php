<?php

Ejercicio 1: new PDO

function abrirBaseDeDatos($dsn, $user, $pass) {
    return new PDO($dsn, $user, $pass);
}

Ejercicio 2: new PDO antierrores

function abrirBaseDeDatos($dsn, $user, $pass) {
    try{
      return new PDO($dsn, $user, $pass);
    }
    catch (\Exception $e){
      return false;
    }
}

Ejercicio 3: Insertando UNA marca

function insertarMarca(PDO $db) {
    $consulta = $db->prepare("INSERT into marcas values (NULL, 'Google')");
    return $consulta->execute();
}

Ejercicio 4: Insertando marcas

function insertarMarca(PDO $db, $nombre) {
    $consulta = $db->prepare("INSERT into marcas values (NULL, '$nombre')");
    return $consulta->execute();
}

Ejercicio 5: Insertando de un formulario

function insertarMarca(PDO $db) {
    $consulta = $db->prepare("INSERT into marcas values (NULL, '$_POST[nombre]')");
    return $consulta->execute();
}

Ejercicio 6: Todas las marcas

function traerMarcas(PDO $db) {
    $consulta = $db->prepare("select * from marcas");
    $consulta->execute();
    return $consulta->fetchAll();
}

Ejercicio 7: Buscar por ID

function traerMarcaPorId(PDO $db, $id) {
    $consulta = $db->prepare("select * from marcas where id=$id");
    $consulta->execute();
    return $consulta->fetch();
}

Ejercicio 8: Implementando un buscador

function buscarMarca(PDO $db) {
    $consulta = $db->prepare("select * from marcas where nombre like '%$_GET[buscador]%'");
    $consulta->execute();
    return $consulta->fetchAll();
}

Ejercicio 9: Buscar por ID...de forma segura

function traerMarcaPorId(PDO $db, $id) {
    $consulta = $db->prepare("select * from marcas where id=:id");
    $consulta->bindValue(":id", $id);
    $consulta->execute();
    return $consulta->fetch();
}

Ejercicio 10: Un buen buscador

function buscarMarca(PDO $db) {
    $consulta = $db->prepare("select nombre from marcas where nombre like :buscador");
    $consulta->bindValue(':buscador', '%'.$_GET[buscador].'%');
    $consulta->execute();
    return $consulta->fetchAll();
}

Ejercicio 11: Insertando clientes

function insertarUsuario(PDO $db) {
    $consulta = $db->prepare("INSERT into clientes values (null, :nombre, :apellido, :email, :telefono, :celular, :fecha, :producto)");
    
    $consulta->bindValue(":nombre", $_POST[nombre]);
    $consulta->bindValue(":apellido", $_POST[apellido]);
    $consulta->bindValue(":email", $_POST[email]);
    $consulta->bindValue(":telefono", $_POST[telefono]);
    $consulta->bindValue(":celular", $_POST[celular]);
    $consulta->bindValue(":fecha", $_POST[anio]."-".$_POST[mes]."-".$_POST[dia]);
    $consulta->bindValue(":producto", $_POST[producto_preferido] );
    $consulta->execute();
    return $consulta->fetch();
}

Fin de archivo