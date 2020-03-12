Ejercicio 1: Agregando nuestro JS

<html>
  <head>
     <script src="script.js"></script>
  </head>
  <body>
    
  </body>
</html>

Ejercicio 2: Ginobili en JS

var ginobili = {
    nombre : "Emanuel",
    apellido: "Ginobili",
    puntos: 0
};

Ejercicio 3: Manu saluda

var ginobili = {
    nombre : "Emanuel",
    apellido: "Ginobili",
    puntos: 0,
    saludar: function() {
      return "Hola, soy Manu";
    }
};

Ejercicio 4: Manu saluda a sus fans

var ginobili = {
    nombre : "Emanuel",
    apellido: "Ginobili",
    puntos: 0,
    saludar: function(fan) {
      return "Hola "+ fan +" soy Manu"
    }
};

Ejercicio 5: Punto de Manu!

var ginobili = {
    nombre : "Emanuel",
    apellido: "Ginobili",
    puntos: 0,
    saludar: function(fan) {
      return "Hola " + fan + " soy Manu"
    },
    doble: function(){
      return this.puntos+=2;
    },
    triple: function(){
      return this.puntos+=3;
    }, 
};

Ejercicio 6: Contando puntos

ginobili.doble();
ginobili.doble();
ginobili.doble();
ginobili.doble();
ginobili.doble();

Ejercicio 7: Recorriendo un objeto

function partesAuto(auto) {
    var partes = []
    for (let prop in auto){
      partes.push(auto[prop])
    }
    return partes
}

Ejercicio 8: ALERTA

window.addEventListener("load", function() {
    alert("Bienvenido!");
})

Ejercicio 9: ¿Queres nuestro Newsletter?

window.addEventListener("load", function() {
    confirm("Quiere nuestro newsletter?")
})

Ejercicio 10: Contame porque...

window.addEventListener("load", function() {
    var resultado = confirm('Quiere nuestro newsletter?');
    if (resultado==true){
      prompt("Cuales son tus intereses?");
    }
    else{
      prompt("Porque no?");
    }
})

Ejercicio 11: Cambiame el color a...

window.addEventListener("load", function() {
    var elColor=prompt("Elegi un color");
    var eleccion = document.querySelector('body');
    eleccion.style.backgroundColor=elColor;
})

Ejercicio 12: Cambiame el color de todos

window.addEventListener("load", function() {
    var color = prompt('Elegi un color');
    var lis = document.querySelectorAll('li');
    for(i in lis){
      lis[i].style.color = color;
    }
})

Ejercicio 13: Decime un video

window.addEventListener("load", function() {
    var codigoVideo = prompt('Ingrese codigo de video');
    var iframe = document.querySelector('iframe');
    iframe.setAttribute('src','https://www.youtube.com/embed/'+codigoVideo);
})

Fin de archivo