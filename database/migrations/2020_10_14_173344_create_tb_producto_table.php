<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_producto', function (Blueprint $table) {
            $table->Integer('pro_id');
            $table->Integer('pro_proveedor');
            $table->string('pro_nombre');
            $table->string('pro_descripcion');
            $table->string('pro_imagen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_producto');
    }
}
