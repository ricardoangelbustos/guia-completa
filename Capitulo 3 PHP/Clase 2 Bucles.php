<?php

Ejercicio 1: Un for en PHP

function bucles() {
    $resultado = [];
    for($i=0;$i<=10;$i++){
      $resultado[]=$i;
    }  
      
    return $resultado;
}

Ejercicio 2: Un for que empiece en...

function bucles() {
    $resultado = [];
      for($i=5;$i<=10;$i++){
        $resultado[]=$i;
      }
    return $resultado;
}

Ejercicio 3: Solo números pares

function bucles() {
    $resultado = [];
    for($i=2;$i<=20;$i=$i+2){
      $resultado[]=$i;
    }
    return $resultado;
}

Ejercicio 4: Recorriendo un array

function bucles($unArray) {
    $resultado = 0;
    for ($i=0; $i<count($unArray); $i++){
      $resultado= $resultado + $unArray[$i];
    }
    
    return $resultado;
}

Ejercicio 5: Filtrando un array

function bucles() {
    $resultado = [];
    for($i=0; $i<count($unArray) ;$i=$i+2){
      $resultado[]=$i;
    }
    return $resultado;
}

Ejercicio 6: Contar hasta

function bucles($numero) {
    $resultado = [];
    $i=$numero;
    while($i<=100){
      $resultado[]=$i;
      $i+=1;
   }
    return $resultado;
}

Ejercicio 7: La racha de la suerte

function racha($dados) {
    $cantidadDe5 = 0;
    $i = 0;
    while ($dados[$i] == 5) {
        $cantidadDe5=$cantidadDe5+1;
        $i++;
    }
  
    return $cantidadDe5;
}

Ejercicio 8: Sumas asociativas

function bucles($numeros) {
    $resultado = 0;
    foreach($numeros as $otro){
      $resultado=$resultado+$otro;
    }
    return $resultado;
}

Ejercicio 9: Alternando claves y valores

function bucles($cantantes) {
    $resultado = [];
    foreach ($cantantes as $clave => $valor){
        $resultado [$valor] = $clave;
    }
  
    return $resultado;
}

Ejercicio 10: Los nombres de los cantantes

function bucles($cantantes) {
    $nombres = [];
    foreach ($cantantes as $indice => $valor){
       $nombres[] = $valor["nombre"];}
    return $nombres;
}

Ejercicio 11: exit;

function debug($random) { 
    var_dump($prueba);
    exit;
    
}

Fin de archivo
