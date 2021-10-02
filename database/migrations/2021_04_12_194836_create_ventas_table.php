<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->timestamps();
           $table->integer('cantidad_de_boletos');
           $table->float('precio_unitario');
            $table->float('precio_final');
            $table->string('nombre_comprador');
            $table->dateTimeTz('fecha_de_venta',$precision=0);
          $table->foreignId('id');
            $table->foreignId('id_paquete');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
