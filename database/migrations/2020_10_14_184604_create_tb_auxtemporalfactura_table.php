<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAuxtemporalfacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_auxtemporalfactura', function (Blueprint $table) {
            $table->Integer('axt_id')->primary();
            $table->string('axt_producto');
            $table->string('axt_nombre');
            $table->Integer('axt_cantidad');
            $table->double('axt_costos');
            $table->Integer('axt_fac_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_auxtemporalfactura');
    }
}
