<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiuAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciu_app', function (Blueprint $table) {
            $table->increments('ciap_id');  // ID ciudad --> Llave Primaria
            $table->string('ciap_coci'); // Codigo Ciudad
            $table->string('ciap_nomb'); // Nombre Ciudad
            $table->string('ciap_copo'); // Codigo postal
            $table->integer('ciap_idde')->unsigned(); // ID Departamento
            $table->foreign('ciap_idde')->references('deap_id')->on('dep_app'); // Tabla dep_app campo deap_id
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
        Schema::drop('ciu_app');
    }
}
