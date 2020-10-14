<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBodegaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bodega', function (Blueprint $table) {
            $table->Integer('bod_id');
            $table->Integer('bod_empresa');
            $table->string('bod_nombre');
            $table->string('bod_direccion');
            $table->string('bod_encargado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_bodega');
    }
}
