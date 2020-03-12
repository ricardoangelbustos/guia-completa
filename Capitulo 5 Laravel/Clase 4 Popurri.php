<?php

Ejercicio 1: Llegan los estudios

class CreateStudioTable extends Migration
{
    public function up()
    {
      Schema::create('studios', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
    });  
    }

    
    public function down()
    {
       Schema::drop("studios");
    }
}

Ejercicio 2: Y las películas...son de un estudio

class AddStudioToMovies extends Migration
{
    public function up()
    {
      Schema::table("movies",function(Blueprint $table)       {
        $table->unsignedInteger("studio_id");
        $table->foreign('studio_id')->references('id')->on('studios');
      });
    }

    
    public function down()
    {
      Schema::table("movies",function(Blueprint $table)       {
        $table->dropForeign("movies_studio_id_foreign");
      });
    }
}

Ejercicio 3: Países de consultoria

class PaisesController extends Controller {
    public function listado() {
      $paises = Curl::to('https://restcountries.eu/rest/v2/all')->get();
    
      $paises = json_decode($paises);
    
      return view("listadoGeneros", compact("paises"));
    }
}

Fin de archivo
