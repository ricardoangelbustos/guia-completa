<?php
Ejercicio 1: Mi primer variable

$prueba="Hola";
echo $prueba;

Ejercicio 2: Analizando variables

$prueba= "Hola";
var_dump($prueba);

Ejercicio 3: Tipos de datos

$miTexto="Hola";
$miNumero=1;
$miDecimal=1.2;
$miVerdad=true;
$miNulo=null;
var_dump($miTexto, $miBumero, $miDecimal, $miVerdad, $miNulo);

Ejercicio 4: Un array vacío

$miArray=[];

Ejercicio 5: Un array de números

$miArray[]=1;
$miArray[]=2;
$miArray[]=3;

Ejercicio 6: Otro array con números

$miArray[10]=1;
$miArray[15]=2;
$miArray[18]=3;

Ejercicio 7: Un array de cosas

$miArray[0]="Hola";
$miArray[1]=2.1;
$miArray[2]=true;

Ejercicio 8: El batiarray

$batman[]="Bruno";
$batman[]="Diaz";
$batman[]=95;
$batman[]=1.80;
$batman[]=[Batilinterna, Batidardos, Batilazo];

Ejercicio 9: Un batiarray legible

$batman=[
    "nombre"=>"Bruno",
    "apellido"=>"Diaz",
    "peso"=>95,
    "altura"=>1.80,
    "baticinturon"=>["Batilinterna", "Batidardos","Batilazo"],
];

Ejercicio 10: ¿Y para leer un array?

$ginobili = [
    "nombre" => "Emanuel David",
    "apellido" => "Ginobili",
    "apodo" => "Manu",
    "altura" => 1.98,
    "peso" => 93,
    "equipos" => [
        "Andino Sport Club",
        "Estudiantes de Bahía Blanca",
        "Viola Reggio Calabria",
        "Kinder Bolonia",
        "San Antonio Spurs"
    ]
];
$nombre=$ginobili["nombre"];
$apodo=$ginobili["apodo"];
$equipo=$ginobili["equipos"][4];

Ejercicio 11: Operaciones matemáticas

$numero1 = 100;
$numero2 = 25;
$suma= $numero1+$numero2;
$resta= $numero1-$numero2;
$multiplicacion= $numero1*$numero2;
$division= $numero1/$numero2;
$resto= $numero1%$numero2;

Ejercicio 12: Una operación compleja

$numero1 = 100;
$numero2 = 25;

$suma= $numero1+$numero2;
$resta= $suma-10;
$resultado= $resta/5;

Ejercicio 13: Había una vez un barco chiquito

$parte1 = "Había una vez";
$parte2 = "un barco";
$parte3 = "chiquito";

$resultado= $parte1." ".$parte2." ".$parte3;

Fin de archivo