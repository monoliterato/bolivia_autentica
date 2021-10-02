<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id('id_paquete');
          $table->timestamps();
           $table->string('nombre_paquete',100);
            $table->string('ubicacion_geografica',100);
            $table->string('duracion',100);
            $table->float('precio');
            $table->string('grado_de_riesgo');
            $table->text('descripcion_breve_paquete',1000);
            $table->text('descripcion_detallada_paquete',1000);
            $table->text('lugares_a_visitar',10000);
            $table->text('incluye',1000);
            $table->text('no_incluye',1000);
            $table->binary('imagen_principal');
            $table->binary('primera_imagen');
            $table->binary('segunda_imagen');
            $table->binary('tercera_imagen');
            $table->binary('cuarta_imagen');
            $table->dateTimeTz('fecha_de_creacion_paquete',$precision=0);
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
        Schema::dropIfExists('paquetes');
    }
}
