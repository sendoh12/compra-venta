<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvMunicipios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_municipios', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->integerIncrements('MUNICIPIOS_ID');
            $table->integer('MUNICIPIOS_ESTADO')->unsigned();
            $table->foreign('MUNICIPIOS_ESTADO')->references('ESTADOS_ID')->on('cv_estados');
            $table->string('MUNICIPIOS_NOMBRE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv_municipios');
    }
}
