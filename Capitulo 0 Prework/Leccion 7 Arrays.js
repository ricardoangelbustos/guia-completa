Ejercicio 1. ¿Arrays?

var superheroes=[
    "Bruce Banner",
    "Peter Parker",
    "Barry Allen"
]
  
  
console.log(superheroes[2]);
console.log(superheroes[1]);

Ejercicio 2. Series favoritas

seriesFavoritasDeAna
seriesFavoritasDeHector
["hola","mundo!"]
["hola","hola"]

Ejercicio 3. Y esto, es un array

arraysIguales(["hola", "mundo"], ["mundo", "hola"])
arraysIguales(["hola", "mundo"], ["hola", "mundo"])
arraysIguales(["hola", "mundo"], ["hola", "todo", "el", "mundo"])
arraysIguales(["hola"], ["hola", "mundo"])
["hola", "mundo"] === ["mundo", "hola"]
personas
["mara", "julian"] === personas
personas === personas

Ejercicio 4. Juegos de azar

numerosDeLoteria
salioCara
[[1, 2, 3], [4, 5, 6]]

Ejercicio 5. Arrays vacíos

var unArrayVacio = []

Ejercicio 6. ¿Cuántos elementos tenés?

[].length
numerosDeLoteria.length
[4, 3].length

Ejercicio 7. Agregando sabor

console.log(pertenencias)
pertenencias.push("ballesta")

Ejercicio 8. Trasladar

var unArray=[1,2,3];
var otroArray=[4,5];

function trasladar(unArray,otroArray){
  unArray.pop("3");
  otroArray.push("3");
}

Ejercicio 9. ¿Y dónde está?

diasLaborales.indexOf("osvaldo")

Ejercicio 10. Contiene

function contiene(array,elemento){
    return (array.indexOf (elemento)>=0)
}

Ejercicio 11. Enésimo elemento

console.log(mesesDelAnio[13])

Ejercicio 12. Más premios

var medalla =["nada","oro","plata","bronce","nada","nada"];
function medallaSegunPuesto(puesto){
  if (puesto>=0 && puesto<=5){
    return medalla[puesto];
  }
  else{
    return "nada"
  }
}

Ejercicio 13. Sumatorias, primera parte

gananciasPrimerTrimestre = [80, 453, 1000,10]

Ejercicio 14. Sumatorias, segunda parte

gananciaTotal([2, 3])
gananciaTotal([2, 3, 1, 8, 8, -1])
gananciaTotal([])

Ejercicio 15. Sumatorias, tercera parte

function gananciaTotal4(unPeriodo){
    var sumatoria=0;
    sumatoria=sumatoria+unPeriodo[0];
    sumatoria=sumatoria+unPeriodo[1];
    sumatoria=sumatoria+unPeriodo[2];
    sumatoria=sumatoria+unPeriodo[3];
    return sumatoria;
}

Ejercicio 16. Sumatorias, cuarta parte

gananciaTotal([])
gananciaTotal([100])
gananciaTotal([100, 2])
gananciaTotal([2, 10, -20])
gananciaTotal([2, 10, -20, 0, 0, 10, 10])

Ejercicio 17. Ciclos con Arrays

---

Ejercicio 18. Conteos

function cantidadDeMesesConGanancia(unPeriodo) {
    var cantidad = 0;
    for (let mes of unPeriodo) {
      if (mes >0){
        cantidad++
      }
    }
    return cantidad;
}

Ejercicio 19. Más conteos

function cantidadDeMesesConPerdida(unPeriodo) {
    var cantidad = 0;
    for (let mes of unPeriodo) {
      if (mes <0){
        cantidad++
      }
    }
    return cantidad;
}

Ejercicio 20. Filtrados

function saldosDeMesesConGanancia(unPeriodo) {
    var saldos = [];
      for (var mes of unPeriodo){
        if(mes>0){
          saldos.push(mes)
        }
      }
    return saldos;
}

Ejercicio 21. Palo de truco

function paloDeTruco(palo){
    var arrayPalo=[];
    for(var i=1;i<13;i++){
      if(i!=8&&i!=9){
        arrayPalo.push([i]+" de "+palo);
      }
    } return arrayPalo;
}

Fin de archivo