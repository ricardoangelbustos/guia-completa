Ejercicio 1: ¿Te sumo o te multiplico?

function operarArray(array, operacion){
    return operacion(array)
}

Ejercicio 2: ¡Sumando y multiplicando!

var miArray = [5, 5, 6]
var suma=operarArray(miArray, sumatoria)
var mult=operarArray(miArray, productoria)

Ejercicio 3: Solo los títulos

var titulos= canciones.map(function(cancion){
    return cancion['nombre']
})

Ejercicio 4: Canciones con buen puntaje

var lasMejores=canciones.filter(function(cancion){
    return cancion.puntaje>8
})

Ejercicio 5: Buscando a la Reina Batata

var reina = canciones.find(function(cancion){
    return cancion.nombre==="La reina batata"
})

Ejercicio 6: ¡Bienvenido!

window.addEventListener("load", function() {
    var nombre=prompt('Inserte su nombre')
    var titulo=document.querySelector('h1')
    titulo.innerHTML="Bienvenido " + nombre
})

Ejercicio 7: Tus series preferidas

window.addEventListener("load", function() {
    var series = prompt('Escriba sus series preferidas separadas por comas');
    var arraySeries = series.split(',');
    var lista = document.querySelector('ul');
    for(var serie in arraySeries){
      lista.innerHTML += '<li>'+arraySeries[serie]+'</li>';
    }
})

Ejercicio 8: Bienvenida en XL

window.addEventListener("load", function() {
    var confirmacion= confirm('Desea agrandar la tipografia')
    var h1=document.querySelector('h1')
    if (confirmacion===true){
      h1.classList.toggle('xl')
    }
    var nombre = prompt("¿Cuál es tu nombre?")
    document.querySelector("h1").innerHTML = "Bienvenido " + nombre
})

Ejercicio 9: El poder del click

window.addEventListener("load", function() {
    var boton=document.querySelector('button')
    var titulo=document.querySelector('h1')
    boton.addEventListener("click",function(){
      var color=prompt('Ingrese un color')
      titulo.style.color=color
    })
})

Ejercicio 10: ¡Ayuda por favor!

window.addEventListener("load", function() {
  
    var boton=document.querySelector('button')
    var parrafo=document.querySelector('p')
    boton.addEventListener("mouseover",function(){
      parrafo.style.display="block"
    })
    boton.addEventListener("mouseout",function(){
      parrafo.style.display="none"
    })
})

Ejercicio 11: El famoso carrousel

window.addEventListener("load", function() {
  
    var imagenes = [
      "https://images.agoramedia.com/everydayhealth/cms/looking-at-cute-pics-helps-you-work-article.jpg",    "http://lifeisbetterrescue.org/images/large/kittens.jpg",
      "https://vmdtoday.s3.amazonaws.com/_media/_image/Kitten-USDA-Investigation_Thumb.jpg",
      "https://pet-uploads.adoptapet.com/f/9/9/243980831.jpg"
    ]
    
    var indice = 0
    var fotito=document.querySelector('img')
        
        document.querySelector('#anterior').addEventListener("click", function() {
     indice = indice - 1;
     if(indice < 0)
     {
       indice = 3;
       fotito.src = imagenes[indice]
     } else {
      fotito.src = imagenes[indice]
     }
   })
    document.querySelector('#siguiente').addEventListener("click", function() {
     indice = indice + 1;
     if(indice < imagenes.length)
     {
       fotito.src = imagenes[indice]
     } else {
       indice = 0;
      fotito.src = imagenes[indice]
     }
   })
   
})

Fin de archivo