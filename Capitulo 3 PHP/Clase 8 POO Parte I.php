<?php

Ejercicio 1: Primero, una clase

class Pelicula{
  
}

Ejercicio 2: Segundo, una instancia

class Pelicula {

}
$miPeli= new Pelicula();

Ejercicio 3: ¿Que tiene una Película?

class Pelicula {
    public $id;
    public $titulo;
    public $rating;
    public $fechaDeEstreno;
}

Ejercicio 4: Dos pelis

class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;
}
$toyStory=new Pelicula();
$toyStory->id="1";
$toyStory->titulo="Toy Story";
$toyStory->rating="9.5";

$buscandoANemo=new Pelicula();
$buscandoANemo->id="2";
$buscandoANemo->titulo="Buscando a Nemo";
$buscandoANemo->rating="8.7";

Ejercicio 5: Ponele Play!

class Pelicula {
    public $id;
    public $titulo;
    public $rating;
    public $fechaDeEstreno;
  
    public function reproducir(){
      return "Reproduciendo";
    }
}

Ejercicio 6: Quiero ver Toy Story

$toyStory = new Pelicula();
$toyStory->titulo="Toy Story";
$toyStory->reproducir();

$buscandoANemo = new Pelicula();
$buscandoANemo->titulo="Buscando a Nemo";

Ejercicio 7: Describir la película

class Pelicula {
    public $id;
    public $titulo;
    public $rating;
    public $fechaDeEstreno;
    
    public function describirse() {
      return $this->titulo . ": " . $this->rating;
    }
}

Ejercicio 8: ¿Es buena la peli?

class Pelicula {
    public $id;
    public $titulo;
    public $rating;
    public $fechaDeEstreno;
    
    public function reproducir() {
      return "Reproduciendo";
    }
    
    public function describirse() {
      return $this->titulo . ": " . $this->rating;
    }
    
    public function ratingMayorA($num){
      return $this->rating>=$num;
    }
}

Ejercicio 9: Encapsulamiento: Getters

class Pelicula {
    public $id;
    public $titulo;
    public $rating;
    public $fechaDeEstreno;
    
    public function reproducir() {
      return "Reproduciendo";
    }
    
    public function describirse() {
      return $this->titulo . ": " . $this->rating;
    }
   
    public function ratingMayorA($num) {
      return $this->rating >= $num;
    }
  
    public function getId(){
      return $this->id;
    }
    
    public function getTitulo(){
      return $this->titulo;
    }
    
    public function getRating(){
      return $this->rating;
    }
    
    public function getFechaDeEstreno(){
      return $this->fechaDeEstreno;
    }
}

Ejercicio 10: Encapsulamiento: Setters

class Pelicula {
    public $id;
    public $titulo;
    public $rating;
    public $fechaDeEstreno;
    
    public function reproducir() {
      return "Reproduciendo";
    }
    
    public function describirse() {
      return $this->titulo . ": " . $this->rating;
    }
   
    public function ratingMayorA($num) {
      return $this->rating >= $num;
    }
    
    public function getId() {
      return $this->id;
    }
    
    public function getTitulo() {
      return $this->titulo;
    }
    
    public function getRating() {
      return $this->rating;
    }
    
    public function getFechaDeEstreno() {
      return $this->fechaDeEstreno;
    }
    
    public function setId($id){
      $this->id=$id;
    }
    
    public function setTitulo($titulo){
      $this->titulo=$titulo;
    }
    
    public function setRating($rating){
      $this->rating=$rating;
    }
    
    public function setFechaDeEstreno($fechaDeEstreno){
      $this->fechaDeEstreno=$fechaDeEstreno;
    }
}

Ejercicio 11: Encapsulemos: Atributos

class Pelicula {
    private $id;
    private $titulo;
    private $rating;
    private $fechaDeEstreno;
    
    public function reproducir() {
      return "Reproduciendo";
    }
    
    public function describirse() {
      return $this->titulo . ": " . $this->rating;
    }
   
    public function ratingMayorA($num) {
      return $this->rating >= $num;
    }
    
    public function getId() {
      return $this->id;
    }
    
    public function getTitulo() {
      return $this->titulo;
    }
    
    public function getRating() {
      return $this->rating;
    }
    
    public function getFechaDeEstreno() {
      return $this->fechaDeEstreno;
    }
    
    public function setId($id) {
      $this->id = $id;
    }
    
    public function setTitulo($titulo) {
      $this->titulo = $titulo;
    }
    
    public function setRating($rating) {
      $this->rating = $rating;
    }
    
    public function setFechaDeEstreno($fechaDeEstreno) {
       $this->fechaDeEstreno = $fechaDeEstreno;
    }
}

Ejercicio 12: Estandarizando ratings

class Pelicula {
    private $id;
    private $titulo;
    private $rating;
    private $fechaDeEstreno;
    
    public function reproducir() {
      return "Reproduciendo";
    }
    
    public function describirse() {
      return $this->titulo . ": " . $this->rating;
    }
   
    public function ratingMayorA($num) {
      return $this->rating >= $num;
    }
    
    public function getId() {
      return $this->id;
    }
    
    public function getTitulo() {
      return $this->titulo;
    }
    
    public function getRating() {
      return $this->rating;
    }
    
    public function getFechaDeEstreno() {
      return $this->fechaDeEstreno;
    }
    
    public function setId($id) {
      $this->id = $id;
    }
    
    public function setTitulo($titulo) {
      $this->titulo = $titulo;
    }
    
    public function setRating($rating) {
      if ($rating>10){
        $this->rating=10;
      }
      else if ($rating<0){
        $this->rating=0;
      }
      else{
        $this->rating = $rating;
      }
    }
    
    public function setFechaDeEstreno($fechaDeEstreno) {
       $this->fechaDeEstreno = $fechaDeEstreno;
    }
}

Ejercicio 13: Dos pelis encapsuladas

$toyStory= new Pelicula();

$toyStory->setId(1);
$toyStory->setTitulo("Toy Story");
$toyStory->setRating(9.5);

$buscandoANemo= new Pelicula();

$buscandoANemo->setId(2);
$buscandoANemo->setTitulo("Buscando a Nemo");
$buscandoANemo->setRating(8.7);

Ejercicio 14: El constructor

class Pelicula {
    private $id;
    private $titulo;
    private $rating;
    private $fechaDeEstreno;
    
    public function __construct($id, $titulo){
      $this->id=$id;
      $this->titulo=$titulo;
    }
    
    public function reproducir() {
      return "Reproduciendo";
    }
    
    public function describirse() {
      return $this->titulo . ": " . $this->rating;
    }
   
    public function ratingMayorA($num) {
      return $this->rating >= $num;
    }
    
    public function getId() {
      return $this->id;
    }
    
    public function getTitulo() {
      return $this->titulo;
    }
    
    public function getRating() {
      return $this->rating;
    }
    
    public function getFechaDeEstreno() {
      return $this->fechaDeEstreno;
    }
    
    public function setId($id) {
      $this->id = $id;
    }
    
    public function setTitulo($titulo) {
      $this->titulo = $titulo;
    }
    
    public function setRating($rating) {
      if ($rating > 10) {
        $this->rating = 10;
      } else if ($rating < 0) {
        $this->rating = 0;
      } else {
        $this->rating = $rating;
       }
    }
    
    public function setFechaDeEstreno($fechaDeEstreno) {
       $this->fechaDeEstreno = $fechaDeEstreno;
    }
}

Ejercicio 15: Construyendo dos pelis

$toyStory= new Pelicula(1, "Toy Story");
$buscandoANemo= new Pelicula(2, "Buscando a Nemo");

Ejercicio 16: Objetoception

class Pelicula {
    private $id;
    private $titulo;
    private $genero;
    function getNombre(){
     return $this->genero;
   }
   
   public function getNombreGenero(){
     return $this->genero->getNombre();
   }
    
    public function __construct($id, $titulo, $genero) {
      $this->id = $id;
      $this->titulo = $titulo;
      $this->genero = $genero;
    }
}

Fin de archivo