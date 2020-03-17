Ejercicio 1: ¿Ciclos?

---

Ejercicio 2: La computadora repite por nosotros

function imprimirAzul4(){
    for (var i=0;i<4;i++){
      console.log("Azul");
    }
}

Ejercicio 3: Reforzando lo que vimos

function imprimir5veces5(){
    for (var i=0;i<5;i++){
      console.log(5);
    }
}

Ejercicio 4: Pasito a pasito...

function pasitoAPasito(){
    for (var i=0;i<5;i++){
      console.log(i);
    }
}

Ejercicio 5: One more rep

function pasandoPorI(){
    for(var i=0;i<4;i++){
      console.log("acá i tiene el valor de " +i);
    }
}

Ejercicio 6: Par o no par, esa es la cuestion

function pasandoPorLosPares(){
    for(var i=0;i<=6;i=i+2){
      console.log("acá i tiene el valor de " +i);
    }
}

Ejercicio 7: Repetición Variable

function imprimirAzul(cantidadDeVeces){
    for (var i=0;i<cantidadDeVeces;i++){
      console.log("Azul");
    }
}

Ejercicio 8: Solo 3 empanadas

function sumar5MonedasDe25Centavos(){
    var suma=0;
    for (var i=0;i<5;i++){
      suma=suma+0.25;
    }
    return(suma);
}
sumar5MonedasDe25Centavos();

Ejercicio 9: Muchas Empanadas

function sumarMonedasDe25(cantidadDeMonedas){
    var sumaMonedas=0;
    for (var i=0;i<cantidadDeMonedas;i++){
      sumaMonedas=sumaMonedas+0.25;
    }
    return(sumaMonedas);
}
sumarMonedasDe25(7);

Ejercicio 10: Seguimos variando

function pasandoPorLosPares(){
    for(var i = 0; i <= 6; i++) {
      if(i%2 == 0){
        console.log("acá i tiene el valor de "+i)
      }
    } 
}
function sumaDeLosParesDel0Al(cantidadPares){
    var pares=0;
    for (var i=0;i<=cantidadPares;i++){
      if (i%2==0){
        pares=pares+i;
        }
    }
return pares;
}

Ejercicio 11: Sumatoria

function sumatoriaHasta(x){
    var sumatoria=0;
    for (var i=0;i<x;i++){
      sumatoria=sumatoria+i;
    }
return sumatoria;
}
sumatoriaHasta(4);

Ejercicio 12: Usain Bolt te necesita

function caloriasDeTrote(vueltas){
    var calorias=0;
    for(var i=0;i<=vueltas;i++){
      calorias=calorias+(5*i);
    }
    return calorias;
}

Fin de archivo