<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_contactos', function (Blueprint $table) {
            $table->bigIncrements('ID_CONTACTO');
            $table->string('CONTACTO_NOMBRE',120)->nullable();
            $table->string('CONTACTO_EMAIL',120)->nullable();
            $table->string('CONTACTO_TELEFONO',120)->nullable();
            $table->string('CONTACTO_ASUNTO',120)->nullable();
            $table->longText('CONTACTO_MENSAJE')->nullable();
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
        Schema::dropIfExists('cv_contactos');
    }
}
