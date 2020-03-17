Ejercicio 1. Productoria

function productoria (numero){
    var resultado=1;
    for (var i=0;i<numero.length;i++){
      resultado=resultado*numero[i];
    }
    return resultado;
}

Ejercicio 2. masMenos

function masMenos(numeros){
    var positivos=0;
    var cero=0;
    var negativos=0;
    var porcentaje=[];
    for (var i=0; i<numeros.length;i++){
      if (numeros [i]>0){
        positivos=positivos+1;
      }
        if  (numeros[i]==0){
          cero=cero+1;
        }
          if (numeros[i]<0){
            negativos=negativos+1;
          }
    }
    porcentaje.push(positivos/numeros.length);
    porcentaje.push(cero/numeros.length);
    porcentaje.push(negativos/numeros.length);
    return porcentaje;
  
}

Ejercicio 3. Escalera

function escalera (escalones){
    var escalonA=[];
    var escalonB=" ";
    var escalonN= "#";
    for (var i=0; i<escalones;i++){
      escalonA.push(escalonB.repeat(escalones-i-1)+escalonN.repeat(i+1));
    }
    return escalonA;
}

Ejercicio 4. Profesora furiosa

function seAbre(ingresos, alumnos){
    var abre=0;
    for (var i=0; i<=ingresos.length;i++){
      if (ingresos[i]<=0){
        abre++;
      }
    }
    return abre>=alumnos;
  }
function aperturas(ingresos,alumnos){
    var result=[];
    for (var i=0; i<ingresos.length;i++){
      if (seAbre(ingresos[i],alumnos)){
        result.push(true)
      } 
      else{
        result.push(false)
      }
    }
    return result;
}

Ejercicio 5. Árbol utópico

function alturaArbolUtopico(ciclos){
    var alto = 1;
    for (var i = 0; i < ciclos; i++){
      if(i%2 == 0){
        alto = alto * 2;
      }
      else {
        alto = alto + 1;
      }
    }
  return alto;
}

Ejercicio 6. Factorial

function factorial(numero) {
	var resultado = 1;
	for (var i = 1; i <= numero; i++) {
		resultado=resultado* i;
	}
	return resultado;
}
