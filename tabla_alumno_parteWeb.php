<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_alumnos', function (Blueprint $table) {
            $table->bigIncrements('id_alumno');
            $table->string('nombre_alumnmo',50);
            $table->string('apellico',50);
            $table->string('direccion',30);
            $table->string('telefono',30);
            $table->string('sexo',30);
            $table->string('curso',50);
            $table->timestamps();
            $table->php artisan make:migration crete_table_alumnos;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_alumnos');
    }
}