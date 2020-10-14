<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTiendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tienda', function (Blueprint $table) {
            $table->Integer('tie_id');
            $table->Integer('tie_empresa');
            $table->string('tie_nombre');
            $table->string('tie_direccion');
            $table->string('tie_descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tienda');
    }
}
