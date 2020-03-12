<?php

Ejercicio 1: Digital Staff

class Persona{
    private $nombre;
    private $apellido;
    private $email;
  
  public function getNombre() {
    return $this->nombre;
  }
  public function getApellido() {
    return $this->apellido;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setNombre($nombre){
     $this-> nombre = $nombre;
  }
    
  public function setApellido($apellido){
      $this-> apellido = $apellido;
  }
    
  public function setEmail($email){
      $this->  email = $email;
  }
}

Ejercicio 2: Estudiantes y Empleados

class Empleado extends Persona{
    private $sueldo;
  
  public function getSueldo() {
    return $this->sueldo;
  }
  public function setSueldo($sueldo){
     $this-> sueldo = $sueldo;
  }
  }
  class Estudiante extends Persona{
    private $egresado=false;
    
  public function esEgresado() {
    return $this->egresado;
  }
  public function getEgresado() {
    return $this->egresado;
  }
  public function setEgresado($egresado){
     $this-> egresado = $egresado;
  }
  public function terminarCursada() {
      $this->egresado = true;
  }
}

Ejercicio 3: Heredando atributos

class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    
    public function getNombre() {
      return $this->nombre;
    }
    
    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }
    
    public function getApellidO() {
      return $this->apellido;
    }
    
    public function setApellido($apellido) {
      $this->apellido = $apellido;
    }
    
    public function getEmail() {
      return $this->email;
    }
    
    public function setEmail($email) {
      $this->email = $email;
    }
}

Ejercicio 4: Pisando métodos

class Empleado extends Persona {
    private $sueldo;
    
    public function __construct($nombre, $apellido, $email, $sueldo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->sueldo = $sueldo;
    }
  
    
    public function getSueldo() {
      return $this->sueldo;
    }
    
    public function setSueldo($sueldo) {
      $this->sueldo = $sueldo;
    }
}

Ejercicio 5: Abstracciones

abstract class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    
    public function __construct($nombre, $apellido, $email) {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
    }
    
    public function getNombre() {
      return $this->nombre;
    }
    
    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }
    
    public function getApellidO() {
      return $this->apellido;
    }
    
    public function setApellido($apellido) {
      $this->apellido = $apellido;
    }
    
    public function getEmail() {
      return $this->email;
    }
    
    public function setEmail($email) {
      $this->email = $email;
    }
  }

Ejercicio 6: Métodos abstractos

abstract class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    
    public function __construct($nombre, $apellido, $email) {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
    }
    
    abstract function ingresarAlEdificio($metodo);
    
    public function getNombre() {
      return $this->nombre;
    }
    
    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }
    
    public function getApellidO() {
      return $this->apellido;
    }
    
    public function setApellido($apellido) {
      $this->apellido = $apellido;
    }
    
    public function getEmail() {
      return $this->email;
    }
    
    public function setEmail($email) {
      $this->email = $email;
    }
}

Ejercicio 7: Pagable

interface Pagable{
    public function pagar();
}

Ejercicio 8: Pagarle a un Empleado

class Empleado extends Persona implements Pagable{
    private $sueldo;
    
    
    
    public function __construct($nombre, $apellido, $email, $sueldo) {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
      $this->sueldo = $sueldo;
    }
    
    public function getSueldo() {
      return $this->sueldo;
    }
    
    public function setSueldo($sueldo) {
      $this->sueldo = $sueldo;
    }
    public function pagar(){
      return "A " . $this->nombre . " " . $this->apellido . " se le depositaron " . "$". $this->sueldo;
    }
    public function ingresarAlEdificio($huella) {
      $huella->verificar();
    }
}

Ejercicio 9: Pagarle a un Proveedor

class ProveedorExterno extends Persona implements Pagable{
    private $pagos;
    
    public function pagar(){
      return "A " . $this->nombre . " " . $this->apellido . " se le depositaron " . "$" . array_sum($this->pagos);
    }
    
    public function __construct($nombre, $apellido, $email) {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
      $this->pagos = [];
    }
    
    public function getPagos() {
      return $this->pagos;
    }
    
    public function agregarPago($pago) {
      $this->pagos[] = $pago;
    }
    
    public function ingresarAlEdificio($autorizacion) {
      $autorizacion->verificar();
    }
}

Ejercicio 10: ¡Fin de Mes!

function finDeMes($personasPagables) {
    $resultados = [];
    
    //Acá comienza tu solución!
    foreach($personasPagables as $valor){
      $resultados[]=$valor->pagar();
    }
    
    
    //Acá termina tu solución
    
    return $resultados;
}

Ejercicio 11: La cantidad de estudiantes

class Estudiante extends Persona {
    private $egresado = false;
    static $cantidadEstudiantes=0;
    
    public function esEgresado() {
      return $this->egresado;
    }
    
    public function terminarCursada() {
      $this->egresado = true;
    }
    
    public function ingresarAlEdificio($tarjeta) {
      $tarjeta->verificar();
    } 
}

Ejercicio 12: Contando

class Estudiante extends Persona {
    private $egresado = false;
    static $cantidadEstudiantes = 0;
    
    public function __construct($nombre, $apellido, $email) {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
      Estudiante::$cantidadEstudiantes++;
    }
    
    public function esEgresado() {
      return $this->egresado;
    }
    
    public function terminarCursada() {
      $this->egresado = true;
    }
    
    public function ingresarAlEdificio($tarjeta) {
      $tarjeta->verificar();
    } 
}

Ejercicio 13: El precio de la cuota

class Estudiante extends Persona {
    private $egresado = false;
    static $cantidadEstudiantes = 0;
    static $precioCuota;
    
    public function __construct($nombre, $apellido, $email) {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
      Estudiante::$cantidadEstudiantes++;
    }
    
    public function esEgresado() {
      return $this->egresado;
    }
    
    public function terminarCursada() {
      $this->egresado = true;
    }
    
    public function ingresarAlEdificio($tarjeta) {
      $tarjeta->verificar();
    } 
    
    static function calcularCuotaFinal($parametro){
      return Estudiante::$precioCuota-($parametro*Estudiante::$precioCuota)/100;
    }
}

Fin de archivo
