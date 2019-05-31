<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fase_publicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fase_id');
            $table->foreign('fase_id')
                ->references('id')->on('fases')
                ->onDelete('cascade');

            $table->unsignedInteger('publicacion_id');
            $table->foreign('publicacion_id')
                ->references('id')->on('publicacions')
                ->onDelete('cascade');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fase_publicacion');
    }
}
