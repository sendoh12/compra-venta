<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCvPropiedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_propiedades', function (Blueprint $table) {
            $table->integerIncrements('PROPIEDADES_ID')->unsigned();
            $table->string('PROPIEDADES_NOMBRE', 500)->nullable();
            $table->string('PROPIEDADES_PAIS', 500)->nullable();
            $table->integer('PROPIEDADES_ESTADO')->unsigned();
            $table->foreign('PROPIEDADES_ESTADO')->references('ESTADOS_ID')->on('cv_estados');
            $table->integer('PROPIEDADES_MUNICIPIO')->unsigned();
            $table->foreign('PROPIEDADES_MUNICIPIO')->references('MUNICIPIOS_ID')->on('cv_municipios');
            $table->string('PROPIEDADES_COLONIA', 500)->nullable();
            $table->string('PROPIEDADES_ZONA', 500)->nullable();
            $table->integer('PROPIEDADES_CP')->nullable();
            $table->string('PROPIEDADES_CALLE', 500)->nullable();
            $table->integer('PROPIEDADES_EXTERIOR')->nullable();
            $table->integer('PROPIEDADES_INTERIOR')->nullable();
            $table->string('PROPIEDADES_IMAGEN', 500)->nullable();
            $table->string('PROPIEDADES_MAPA', 500)->nullable();
            // generales
            $table->string('PROPIEDADES_TIPO', 500)->nullable();
            $table->string('PROPIEDADES_SUBTIPO', 500)->nullable();
            $table->string('PROPIEDADES_OPERACION', 500)->nullable();
            $table->string('PROPIEDADES_PRECIO', 500)->nullable();
            $table->integer('PROPIEDADES_HABITACIONES')->nullable();
            $table->integer('PROPIEDADES_BAÑOS')->nullable();
            $table->integer('PROPIEDADES_MEDIO_BAÑO')->nullable();
            $table->string('PROPIEDADES_TERRENOS', 500)->nullable();
            $table->string('PROPIEDADES_CONSTRUCCION', 500)->nullable();
            $table->string('PROPIEDADES_CONDICIONES', 500)->nullable();
            $table->integer('PROPIEDADES_AÑO')->nullable();
            $table->integer('PROPIEDADES_NIVELES')->nullable();
            $table->integer('PROPIEDADES_ESTACIONAMIENTO')->nullable();
            $table->string('PROPIEDADES_CUOTA', 500)->nullable();
            // descripcion
            $table->longText('PROPIEDADES_DESCRIPCION')->nullable();
            $table->string('PROPIEDADES_CLAVE', 500)->nullable();
            $table->string('PROPIEDADES_VIDEO', 500)->nullable();
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
