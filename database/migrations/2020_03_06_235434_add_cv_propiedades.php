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
            $table->string('PROPIEDADES_NOMBRE')->nullable();
            $table->string('PROPIEDADES_PAIS')->nullable();
            $table->integer('PROPIEDADES_ESTADO')->unsigned();
            $table->foreign('PROPIEDADES_ESTADO')->references('ESTADOS_ID')->on('cv_estados');
            $table->integer('PROPIEDADES_MUNICIPIO')->unsigned();
            $table->foreign('PROPIEDADES_MUNICIPIO')->references('MUNICIPIOS_ID')->on('cv_municipios');
            $table->string('PROPIEDADES_COLONIA')->nullable();
            $table->string('PROPIEDADES_ZONA')->nullable();
            $table->integer('PROPIEDADES_CP')->nullable();
            $table->string('PROPIEDADES_CALLE')->nullable();
            $table->integer('PROPIEDADES_EXTERIOR')->nullable();
            $table->integer('PROPIEDADES_INTERIOR')->nullable();
            $table->string('PROPIEDADES_IMAGEN')->nullable();
            $table->string('PROPIEDADES_MAPA')->nullable();
            // generales
            $table->string('PROPIEDADES_TIPO')->nullable();
            $table->string('PROPIEDADES_SUBTIPO')->nullable();
            $table->string('PROPIEDADES_OPERACION')->nullable();
            $table->string('PROPIEDADES_PRECIO')->nullable();
            $table->integer('PROPIEDADES_HABITACIONES')->nullable();
            $table->integer('PROPIEDADES_BAÑOS')->nullable();
            $table->integer('PROPIEDADES_MEDIO_BAÑO')->nullable();
            $table->string('PROPIEDADES_TERRENOS')->nullable();
            $table->string('PROPIEDADES_CONSTRUCCION')->nullable();
            $table->string('PROPIEDADES_CONDICIONES')->nullable();
            $table->integer('PROPIEDADES_AÑO')->nullable();
            $table->integer('PROPIEDADES_NIVELES')->nullable();
            $table->integer('PROPIEDADES_ESTACIONAMIENTO')->nullable();
            $table->string('PROPIEDADES_CUOTA')->nullable();
            // descripcion
            $table->longText('PROPIEDADES_DESCRIPCION')->nullable();
            $table->string('PROPIEDADES_CLAVE')->nullable();
            $table->string('PROPIEDADES_VIDEO')->nullable();
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
