<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_notificaciones', function (Blueprint $table) {
            $table->Integer('not_id')->primary();
            $table->string('not_titulo');
            $table->string('not_mensaje');
            $table->date('not_fecha');
            $table->string('not_aviso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_notificaciones');
    }
}
