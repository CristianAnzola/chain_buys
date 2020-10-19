<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_factura', function (Blueprint $table) {
            $table->Integer('fac_id')->primary();
            $table->Integer('fac_empresa');
            $table->Integer('fac_codigo');
            $table->Integer('fac_usuario');
            $table->string('fac_cliente');
            $table->Integer('fac_producto');
            $table->string('fac_telefono');
            $table->date('fac_fecha');
            $table->double('fac_subtotal', 10, 2);
            $table->double('fac_total', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_factura');
    }
}
