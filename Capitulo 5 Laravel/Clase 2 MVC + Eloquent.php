<?php

Ejercicio 1: Rutas -> Controladores

Route::get("/generos", "GenerosController@listado");
Route::get("/peliculas", "PeliculasController@listado");
Route::get("/peliculas/{ID}", "PeliculasController@detalle");

Ejercicio 2: GenerosController

class GenerosController extends Controller {
    public function listado(){
      $vac=compact("generos");
      return view("listadoGeneros", $vac);
    }
}

Ejercicio 3: PeliculasController

class PeliculasController extends Controller {
    public function listado(){
      $vac=compact("peliculas");
      return view("listadoPeliculas", $vac);
    }
    public function detalle($id){
      $vac=compact("id");
      return view ("detallePelicula", $vac);
    }
}

Ejercicio 4: Modelo: Genero

class Genero extends Model {
    public $table="genres";
    public $timestamps=false;
    public $guarded=[];
}

Ejercicio 5: Modelo: Pelicula

class Pelicula extends Model {
    public $table="movies";
    public $guarded=[];
    
    public function esRecomendada(){
      return $this->rating>8;
    }
}

Ejercicio 6: Todas las películas

class PeliculasController extends Controller {
    public function listado() {
    $peliculas=Pelicula::all();
      $vac=compact("peliculas");
      return view("listadoPeliculas", $vac);
    }
}

Ejercicio 7: El detalle de una película

class PeliculasController extends Controller {
    public function detalle($id) {
    $pelicula=Pelicula::find($id);
      $vac=compact("pelicula");
      return view("detallePelicula", $vac);
    }
}

Ejercicio 8: Peliculas con buen rating

class PeliculasController extends Controller {
    public function buenasPeliculas() {
    $peliculas = Pelicula::where("rating", ">", 8)
    ->get();
    $vac = compact("peliculas");
    return view("buenasPeliculas", $vac);
    }
}

Ejercicio 9: Filtro y orden

class PeliculasController extends Controller {
    public function buenasPeliculas() {
    $peliculas=Pelicula::where("rating", ">", 8)
    ->orderBy(title)
    ->get();
      $vac=compact("peliculas");
      return view ("buenasPeliculas", $vac);
    }
}

Ejercicio 10: Doble filtro y orden

class PeliculasController extends Controller {
    public function peliculasAceptables() {
    $peliculas=Pelicula::where("rating", ">", 5)-> where("rating", "<=", 8)
      ->orderBy(title)
      ->get();
      $vac=compact("peliculas");
      return view("peliculasAceptables", $vac);
    }
}

Ejercicio 11: Insertando una película

class PeliculasController extends Controller {
    public function almacenar(Request $req){
    $peliculaNueva=new Pelicula();
      
    $peliculaNueva->title=$req["title"];
    $peliculaNueva->rating=$req["rating"];
    $peliculaNueva->awards=$req["awards"];
    $peliculaNueva->realease_date=$req["release_date"];
      
    $peliculaNueva->save();
    
    return redirect("/peliculas/listado");
    }
}

Ejercicio 12: Actualizando una película

class PeliculasController extends Controller {
    public function actualizar(Request $req, $id){
      $peliculaUpdate = Pelicula::find($id);
      $peliculaUpdate->title = $req["title"];
      $peliculaUpdate->rating = $req["rating"];
      $peliculaUpdate->awards =  $req["awards"];
      $peliculaUpdate->release_date = $req["release_date"];
      $peliculaUpdate->save();
      
     return redirect("/peliculas/listado");
    }
}

Ejercicio 13: Y finalmente, el borrado

class PeliculasController extends Controller {
    public function eliminar(Request $formulario){
      $id = $formulario["id"];
      $pelicula = Pelicula::find($id);
      $vac = compact("id");
      $pelicula->delete();
      return redirect("/peliculas/listado");
    }
}

Fin de archivo
