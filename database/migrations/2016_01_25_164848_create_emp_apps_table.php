<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_app', function (Blueprint $table) {
            $table->increments('emap_id'); // ID --> llave primaria
            $table->string('emap_raso'); // Razon Social
            $table->string('emap_nitt'); // nit_cigarreria
            $table->string('emap_ubic'); // ubicacion
            $table->string('emap_rele'); // Representante Legal
            $table->string('emap_ceco'); // Celular de contacto
            $table->string('emap_teco'); // Telefono de contacto
            $table->string('emap_emco'); // Email
            $table->timestamp('emap_fecr'); // Fecha Creacion
            $table->integer('emap_idci')->unsigned(); //id ciudad
            $table->foreign('emap_idci')->references('ciap_id')->on('ciu_app');
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
        Schema::drop('emp_app');
    }
}
