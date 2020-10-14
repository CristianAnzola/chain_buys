<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTemporalfacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_temporalfactura', function (Blueprint $table) {
            $table->Integer('temp_usu_docu');
            $table->Integer('temp_empresa');
            $table->Integer('temp_codigo');
            $table->Integer('temp_usuario');
            $table->string('temp_cliente');
            $table->Integer('temp_producto');
            $table->string('temp_telefono');
            $table->string('temp_fecha');
            $table->double('temp_subtotal');
            $table->double('temp_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_temporalfactura');
    }
}
