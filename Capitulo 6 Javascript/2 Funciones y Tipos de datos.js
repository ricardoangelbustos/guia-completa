Ejercicio 1: Funciones, declaración

function mitad(numero){
    return numero/2;
}

Ejercicio 2: Funciones, uso

function anterior(numero){
    return numero-1;
}
function triple(numero){
    return numero*3;
}
function anteriorDelTriple(numero) {
    return anterior(triple(numero));
}

Ejercicio 3: Probando funciones

4+5
Math.random()
funcionLoca(1,2,3)

Ejercicio 4: ¿Es par?

function esPar(numero){
    return (numero%2==0)
}

Ejercicio 5: Tipos de datos

5 + 6 
5 === 6 
8 > 6 
!true
false / true

Ejercicio 6: Haciendo cuentas

Math.abs(4)
Math.abs(0)
Math.abs(-123)
Math.round(4.6)
Math.round(4.3)
Math.floor(4.3)
Math.floor(4.6)
Math.max(4, 7)
Math.min(4, 7)

Ejercicio 7: Calefones

function cuantoCarga(tiene,carga){
    return Math.min(25-tiene,carga);
}

Ejercicio 8: Números aleatorios

Math.random()

Ejercicio 9: Tirando los dados

function tirarDado(){
    return Math.round(Math.random()*6);
}

Ejercicio 10: Booleanos

function estaEntre(numero1, numero2, numero3){
    return (numero1>numero2 && numero1<numero3)
}
function estaFueraDeRango(numero1, numero2, numero3){
    return (numero1<numero2 || numero1>numero3)
}

Ejercicio 11: Palabras, sólo palabras

function esFinDeSemana(dia){
    return dia==="sábado" || dia==="domingo";
}

Ejercicio 12: Operando strings

function longitudNombreCompleto(nombre,apellido){
    return (nombre+" "+apellido).length;
}

Ejercicio 13: ¡GRITAR!

function gritar(nombre){
    return "¡"+nombre.toUpperCase()+"!";
}

Ejercicio 14: ¿Y que tal si...?

function maximo(numero1, numero2){
    if (numero1>numero2){
      return numero1;
    }
    else{
      return numero2;
    }
}

Ejercicio 15: ¿De qué signo sos?

function signo(numero){
    if (numero>0){
      return 1;
    }
    else{
      if (numero<0){
        return -1;
      }
      else{
        return 0;
      }
    }
}

Ejercicio 16: Más booleanos

function esNumeroDeLaSuerte(numero){
    return (numero>0) && ((numero%2===0)||(numero%3===0)) && (numero!=15);
} 

Ejercicio 17: Los premios

function medallaSegunPuesto(puesto){
    if (puesto===1){
      return "oro";
    }
    else{
      if (puesto===2){
        return "plata";
      }
      else{
        if (puesto===3){
          return "bronce";
        }
        else{
          return "nada";
        }
      }
    }
}

Fin de archivo

