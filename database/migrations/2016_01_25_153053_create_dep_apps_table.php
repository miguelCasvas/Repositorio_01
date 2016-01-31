<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dep_app', function (Blueprint $table) {
            $table->increments('deap_id'); // Llave primaria
            $table->string('deap_code'); // Codigo Departamento
            $table->string('deap_nomb'); // Nombre Departamento
            $table->timestamp('deap_fecr'); // Fecha Creacion
            $table->integer('deap_idpa')->unsigned(); // Llave Foranea
            $table->foreign('deap_idpa')->references('paap_id')->on('pai_app'); //  llave Foranea --> Tabla pai_app campo paap_id
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
        Schema::drop('dep_app');
    }
}
