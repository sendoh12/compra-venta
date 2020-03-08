<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCvImagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_imagenes', function (Blueprint $table) {
            $table->integerIncrements('IMAGENES_ID')->unsigned();
            $table->integer('IMAGENES_PROPIEDAD')->unsigned();
            $table->foreign('IMAGENES_PROPIEDAD')->references('PROPIEDADES_ID')->on('cv_propiedades');
            $table->string('IMAGENES_NOMBRE')->nullable();
            $table->string('IMAGENES_ARCHIVO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
