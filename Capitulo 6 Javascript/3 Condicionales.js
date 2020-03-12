Ejercicio 1: ¿Condicionales?

---

Ejercicio 2: ¿Que tal si?

var diaDeSemana="domingo";
if (diaDeSemana=="domingo"){
  console.log("Hoy se juega al futbol!!!");
}

Ejercicio 3: Y ¿que tal si no...?

function hoySeJuega(diadelasemana){
    if (diadelasemana=="domingo"){
      return "Hoy se juega al futbol!!!";
    } else {
        return "Hoy no se juega al futbol :(";
    }
  }
hoySeJuega("lunes");

Ejercicio 4: ¿Cuál es mayor?

function elMayor(numero1,numero2){
    if (numero1>numero2){
      return numero1;
    } else{
      return numero2;
    }
}

Ejercicio 5: ¿De qué signo sos?

function signo(numero){
    if (numero<0){
      return "-1";
    }
    else{
      if (numero>0){
        return "1";
      }
      else {
        return "0";
      }
    }
}

Ejercicio 6: La cábala de Mariana

function esNumeroDeLaSuerte(numero){
    return numero>0&&((numero%2)==0||(numero%3)==0)&&(numero!=15);
}
esNumeroDeLaSuerte(20);

Ejercicio 7: ¿Podemos ir al banco?

function puedoIrAlBanco(diaDeLaSemana,horaActual){
	return ((diaDeLaSemana!="Sábado")&&(diaDeLaSemana!="Domingo"))&&((horaActual>=9&&horaActual<=15));
}
puedoIrAlBanco("Sábado",11);

Ejercicio 8: El filósofo hipster

function filosofoHipster(profesion,nacionalidad,kmpordia){
	return profesion=="Músico"&&nacionalidad=="Argentina"&&kmpordia==5;
}
filosofoHipster("Músico","Argentina",5);

Ejercicio 9: Las tablas de la verdad

filosofoHipster('Músico', 'Argentina', 5) // true
filosofoHipster('Futbolista', 'Brasil', 12) // false
filosofoHipster('Músico', 'Argentina', 1) // false
filosofoHipster('Docente', 'Canadá', 12) // false

Ejercicio 10: La familia Buen Día

function tienenLaMismaMadre(hijo1,hijo2){
    return madreDe(hijo1)!=madreDe(hijo2);
}
function tienenElMismoPadre(hijo1,hijo2){
    return padreDe(hijo1)!=padreDe(hijo2);
}
function sonMedioHermanos(hijo1,hijo2){
    return tienenLaMismaMadre(hijo1,hijo2)!=tienenElMismoPadre(hijo1,hijo2);
}

Ejercicio 11: La hora de la verdad

sonMediosHermanos(arcadio, aurelianoJose)
sonMediosHermanos(aurelianoSegundo, remedios)
sonMediosHermanos(aurelianoJose, remedios)

Ejercicio 12: Mi nombre es Xor

function xor(valor1,valor2){
    return valor1!=valor2;
}

Ejercicio 13: Volviendo al secundario

pagaConTarjeta(true, 6, 320)
pagaConTarjeta(false, 8, 80)
pagaConTarjeta(true, 2, 215)
pagaConTarjeta(true, 1, 32)

Ejercicio 14: Un ejercicio sin precedentes

function puedeJubilarse(edad,sexo,aportes){
    return (sexo=="M"&&aportes>=30&&edad>=65)||(sexo=="F"&&aportes>=30&&edad>=60);
}
puedeJubilarse(67,"M",31);

Ejercicio 15: Vamos al parque de diversiones

function puedeSubirse(alturaPersona,vieneConCompania,tieneAfeccionCardiaca){
    return (alturaPersona>=1.5&&!tieneAfeccionCardiaca)||((alturaPersona<=1.49&&alturaPersona>=1.2)&&vieneConCompania&&!tieneAfeccionCardiaca);
}
puedeSubirse(1.7, false, true);

Ejercicio 16: Ahora, te vamos a dar un premio

function medallaSegunPuesto(puesto){
    if (puesto==1){
      return "oro";
    }
    else {
      if (puesto==2){
        return "plata";
      }
      else{
        if (puesto==3){
          return "bronce";
        }
        else{
          return "Seguí participando";
        }
      }
    }
}
medallaSegunPuesto(1);

Fin de archivo
