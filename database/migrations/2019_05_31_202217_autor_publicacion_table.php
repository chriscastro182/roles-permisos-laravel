<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AutorPublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_publication', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('autor_id');
            $table->foreign('autor_id')
                ->references('id')->on('autors')
                ->onDelete('cascade');

            $table->unsignedInteger('publicacion_id');
            $table->foreign('publicacion_id')
                ->references('id')->on('publicacions')
                ->onDelete('cascade');

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
        Schema::drop('autor_publication');
    }
}
