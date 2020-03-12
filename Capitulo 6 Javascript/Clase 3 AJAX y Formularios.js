Ejercicio 1: Mix de Strings

function stringBomb(unTexto) {
    return unTexto.split(',').map(nombre=>(nombre.trim())).filter(nombre=>((nombre.length>3&&nombre.match(/a/g)))).map(nombre=>(nombre.replace('ñ','n'))).toString()
}

Ejercicio 2: De un JSON para otro

function cambiarColor(autoJson, colorNuevo) {
    var auto=JSON.parse(autoJson)
    auto.color=colorNuevo
    return JSON.stringify(auto)
}

Ejercicio 3: Consumiendo APIs

window.addEventListener("load", function() {
    fetch("https://pokeapi.co/api/v2/type/")
      .then(function(response) {
        return response.json();
      })
      .then(function(json) {
        ul = document.querySelector("ul")
        tipos = json.results
      
        for (var i = 0; i < tipos.length; i++) {
          ul.innerHTML += "<li>" + tipos[i].name + "</li>"
        }
      });
});

Ejercicio 4: Agregando referencias...

window.addEventListener("load", function() {
    fetch("https://pokeapi.co/api/v2/type/")
      .then(function(response) {
        return response.json();
      })
      .then(function(json) {
        ul = document.querySelector("ul")
        tipos = json.results
      
        for (var i = 0; i < tipos.length; i++) {
          ul.innerHTML += "<li url='" + tipos[i].url + "'>" + tipos[i].name + "</li>"
        }
      });
});

Ejercicio 5: Clickeando en los tipos

window.addEventListener("load", function() {
    fetch("https://pokeapi.co/api/v2/type/")
      .then(function(response) {
        return response.json();
      })
      .then(function(json) {
        ul = document.querySelector("ul")
        tipos = json.results
      
        for (var i = 0; i < tipos.length; i++) {
          ul.innerHTML += "<li url='" + tipos[i].url + "'>" + tipos[i].name + "</li>"
        }
        
        var lis = document.querySelectorAll("li")
        
        for (var i = 0; i < lis.length; i++) {
          
        
        lis[i].addEventListener("click", function() {
          document.querySelector("p").innerHTML = "click!"
        });
          
        }  
      });
});

Ejercicio 6: Tipo! Yo te elijo!

window.addEventListener("load", function() {
    fetch("https://pokeapi.co/api/v2/type/")
      .then(function(response) {
        return response.json();
      })
      .then(function(json) {
        ul = document.querySelector("ul")
        tipos = json.results
      
        for (var i = 0; i < tipos.length; i++) {
          ul.innerHTML += "<li url='" + tipos[i].url + "'>" + tipos[i].name + "</li>"
        }
        
        
        var lis = document.querySelectorAll("li")
        
        for (var i = 0; i < lis.length; i++) {
          
        
        lis[i].addEventListener("click", function() {
          document.querySelector("p").innerHTML = this.innerHTML + ": " + this.getAttribute("url")
        });
          
        }  
      });
});

Ejercicio 7: Ajaxception: Dame los ataques

window.addEventListener("load", function() {

    var lis = document.querySelectorAll("li")
  
    for (var i = 0; i < lis.length; i++) {
      lis[i].addEventListener("click", function() {
        document.querySelector("p").innerHTML = this.innerHTML + ": " + this.getAttribute("url")
  
  
        fetch(this.getAttribute("url") )
        .then(function(response) {
  
          return response.json()
        })
        .then(function(json){
          var ataques = json.moves
  
          var ulataques = document.querySelector(".ataques")
  
  
          ulataques.innerHTML = ""
  
          for (var j = 0; j < ataques.length; j++) {
            ulataques.innerHTML += "<li>" + ataques[j].name + "</li>"
          }
        })
  
      });
    }  
});

Ejercicio 8: Formularios enfocados

window.addEventListener("load", function() {
    document.querySelector("input[name=nombre]").addEventListener("change", function(event) {
     alert('Gracias por dejar tu nombre')
     
   })
   document.querySelector("input[name=email]").addEventListener("change", function(event) {
     alert('Gracias por dejar tu email')
     
   })
 });

Ejercicio 9: Atrapando formularios

window.addEventListener("load", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
      
      event.preventDefault()
      alert('Gracias!')
      
    })
});

Ejercicio 10: Validando campos

window.addEventListener("load", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
      var nombre=document.querySelector('input[name="nombre"]').value
      if(nombre==''){
        alert('Dejaste el campo nombre vacio')
        event.preventDefault()
      }
      var email=document.querySelector('input[name="email"]').value
      if(email==''){
        alert('Dejaste el campo email vacio')
        event.preventDefault()
      }
      
      
    })
});

Fin de archivo
