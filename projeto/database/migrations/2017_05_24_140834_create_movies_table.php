<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {

            $table->increments('id');
            $table->string('titulo');
            $table->integer('ano');
            $table->string('atorprincipal');
            $table->string('diretor');
            $table->string('sinopse');
            $table->integer('genre_id')->unsigned();
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genres');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
