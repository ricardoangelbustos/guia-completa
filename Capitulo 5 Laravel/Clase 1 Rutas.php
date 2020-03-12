<?php

Ejercicio 1: Nuestra primer ruta

Route::get("/inicio",function(){
  return "Bienvenido";
});

Ejercicio 2: Dos rutas ahora

Route::get("/registracion",function(){
    return "Registrese";
});
Route::post("/registracion",function(){
    return "Bienvenido";
});

Ejercicio 3: La ruleta

Route::get("/ruleta/{id}", function ($id){
    return "Apuesta al numero $id";
});

Ejercicio 4: La ruleta validada

Route::get("/ruleta/{numero}", function($numero) {
    if ($numero<0||$numero>36){
      return "Numero invalido";
    }
    else{
      return "Apuesta al numero $numero";
    }
});

Ejercicio 5: La apuesta

Route::get("/ruleta/{numero}/{monto}",
function ($numero, $monto){
  if($numero < 0 || $numero > 36){
    return "Numero invalido";
    } else {
    return "Apuesta $monto al numero $numero";
  }
});

Ejercicio 6: Apuesta mínima

Route::get("/ruleta/{numero}/{monto?}",
function ($numero, $monto=50){
  if ($numero < 0 || $numero > 36){
    return "Numero invalido";
  }
  else {
    return "apuesta $monto al numero $numero";
  }
});

Ejercicio 7: ¡A la vista!

Route::get("/inicio",function(){
    return view("inicio");
});

Ejercicio 8: La vista y sus parámetros

Route::get("/bienvenido/{nombre}/{apellido}",
function($nombre, $apellido){
  $vac=compact("nombre","apellido");
  return view ("bienvenido", $vac);
});

Fin de archivo
