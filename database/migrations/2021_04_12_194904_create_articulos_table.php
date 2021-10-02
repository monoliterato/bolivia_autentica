<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id('id_articulo');
            $table->timestamps();
            $table->string('titulo_de_articulo',500);
            $table->date('fecha_de_publicacion_del_articulo');
            $table->longText('breve_descripcion_articulo',1000);
            $table->longText('contenido_articulo',10000);
            $table->binary('imagen_principal_articulo');
            $table->binary('primera_imagen');
            $table->binary('segunda_imagen');
            $table->dateTimeTz('fecha_de_creacion_articulo',$precision=0);
            $table->foreignId('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
