<?php

Ejercicio 1: Funciones 101

function unoAlDiez(){
    for($i=1;$i<=10;$i++){
      $resultado[]=$i;
    }
    return $resultado;
}

Ejercicio 2: Llamando funciones

function dobles(){
    $doble=[];
    $array=unoAlDiez();
    foreach($array as $valor){
      $doble[]=$valor*2;
    }
    return $doble;
}

Ejercicio 3: Cualquier doble

function dobles($array){
    $nuevoarray=[];
    foreach($array as $valor){
      $resultado=$valor*2;
      $nuevoarray[]=$resultado;
    }
    return $nuevoarray;
}

Ejercicio 4: Nombre completo

function nombreCompleto ($nombre,$apellido) {
    return "$nombre $apellido";
}

Ejercicio 5: Entre 0 y 100

function entre0Y100($numero) {
    if ($numero >=0 && $numero <= 100){
      return true;
    } 
}

Ejercicio 6: Entre N y M

function entreDosNumeros ($numE,$numi,$nums){
    if($numE>=$numi && $numE<=$nums){
      return true;
    }
}

Ejercicio 7: Entre 2 números optativos

function entreDosNumeros($numero, $numinf="0", $numsup="100"){
    return (($numero <= $numsup) && ($numero >= $numinf));
}

Ejercicio 8: Variables globales

function aumentarContador(){
    global $contadorGlobal;
    $contadorGlobal++;
}

Fin de archivo