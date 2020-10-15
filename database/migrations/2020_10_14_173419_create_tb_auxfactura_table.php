<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAuxfacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_auxfactura', function (Blueprint $table) {
            $table->Integer('axf_id')->primary();
            $table->Integer('axf_producto');
            $table->Integer('axf_cantidad');
            $table->double('axf_costo');
            $table->Integer('axf_fac_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_auxfactura');
    }
}
