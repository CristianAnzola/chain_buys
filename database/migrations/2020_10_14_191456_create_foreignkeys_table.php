<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignkeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_tienda', function (Blueprint $table) {
            $table->foreign('tie_empresa')->references('emp_nit')->on('tb_empresa');
        });

        Schema::table('tb_productoprecio', function (Blueprint $table) {
            $table->foreign('prp_id')->references('pro_id')->on('tb_productoprecio');
            $table->foreign('prp_bodega')->references('bod_id')->on('tb_bodega');
        });

        Schema::table('tb_producto', function (Blueprint $table) {
            $table->foreign('pro_proveedor')->references('prv_proveedor')->on('tb_proveedor');
        });

        Schema::table('tb_users', function (Blueprint $table) {
            $table->foreign('tienda')->references('tie_id')->on('tb_tienda');
        });

        Schema::table('tb_factura', function (Blueprint $table) {
            $table->foreign('fac_usuario')->references('id')->on('users');
        });

        Schema::table('tb_auxfactura', function (Blueprint $table) {
            $table->foreign('axf_fac_id')->references('fac_id')->on('tb_factura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreignkeys');
    }
}
