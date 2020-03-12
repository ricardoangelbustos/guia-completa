<?php

Ejercicio 1: Validando

class PeliculasController extends Controller {
    public function almacenar(Request $req) {
      
      $reglas = [
        "title" => "required|max:255|unique:movies,title",
        "rating" => "required|numeric|min:0|max:10",
        "awards" => "required|integer|min:0"
      ];
      
      
    $this->validate($req, $reglas);
      
      $pelicula = new Pelicula();
      $pelicula->title = $req["title"];
      $pelicula->rating = $req["rating"];
      $pelicula->awards = $req["awards"];
      $pelicula->save();
      
      return redirect("peliculas/listado");
    }
}

Ejercicio 2: De películas a géneros

class Pelicula extends Model {
    protected $table = "movies";
    protected $guarded = [];
    
    public function esRecomendada() {
       return $this->rating > 8;
    }
    public function genero(){
      return $this->belongsTo("App\Genero",genre_id);
    }
  }

Ejercicio 3: Y de generos a películas

class Genero extends Model {
    public $table = "genres";
    public $timestamps = false;
    public $guarded = [];
    
    public function peliculas(){
      return $this->hasMany("App\Pelicula", genre_id);
    }
}

Ejercicio 4: De Peliculas a Actores

class Pelicula extends Model {
    protected $table = "movies";
    protected $guarded = [];
    
    public function esRecomendada() {
       return $this->rating > 8;
    }
    
    public function genero() {
       return $this->belongsTo("App\Genero","genre_id");
    }
    
    public function actores(){
      return $this->belongsToMany("App\Actor", actor_movie, movie_id, actor_id);
    }
}

Ejercicio 5: Y de actores a películas...

class Actor extends Model {
    protected $table = "actors";
    protected $guarded = [];
    
    public function peliculas(){
      return $this->belongsToMany("App\Pelicula", actor_movie, actor_id, movie_id);
    }
}

Ejercicio 6: Paginado

class PeliculasController extends Controller {
    public function listado() {
      $peliculas = Pelicula::paginate(10);
      $vac = compact("peliculas");
      return view("listadoPeliculas", $vac);
    }
}

Ejercicio 7: Paginado y filtrado

class PeliculasController extends Controller {
    public function buenasPeliculas() {
      $peliculas = Pelicula::where("rating", ">", "8")->paginate(10);
      return view("buenasPeliculas", compact("peliculas"));
    }
}

Ejercicio 8: Guardando la foto

class PeliculasController extends Controller {
    public function almacenar(Request $req) {
   
      
      $this->validate($req,[
        "title" => "required|max:255|unique:movies,title",
        "rating" => "required|numeric|min:0|max:10",
        "awards" => "required|integer|min:0"
      ]);
      
        $pelicula = new Pelicula();
      
      $ruta = $req->file("poster")->store("public");
      $nombreArchivo = basename($ruta);
      
      $pelicula->poster = $nombreArchivo;
      $pelicula->title = $req["title"];
      $pelicula->rating = $req["rating"];
      $pelicula->awards = $req["awards"];
      
      $pelicula->save();
    
      return redirect("peliculas/listado");
    }
}

Fin de archivo
