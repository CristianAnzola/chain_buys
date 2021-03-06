<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProductoprecioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_productoprecio', function (Blueprint $table) {
            $table->Integer('prp_id');
            $table->Integer('prp_bodega');
            $table->double('prp_costo');
            $table->Integer('prp_stock');
            $table->Integer('prp_cantidad');
            $table->primary( array('prp_id','prp_bodega') );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_productoprecio');
    }
}
