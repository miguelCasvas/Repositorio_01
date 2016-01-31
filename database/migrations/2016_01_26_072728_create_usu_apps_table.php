<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usu_app', function (Blueprint $table) {
            $table->increments('usap_id'); // llave primaria
            $table->string('usap_iden'); // Identificacion
            $table->string('usap_nomb'); // Nombres
            $table->string('Apellidos'); // Apellidos
            $table->string('usap_emai'); // Email
            $table->string('usap_pass'); // Password
            $table->date('usap_fena'); // Fecha Nacimiento
            $table->string('usap_ubic'); // Ubicacion
            $table->string('usap_sexo'); // Sexo
            $table->string('usap_tele'); // Telefono
            $table->string('usap_celu'); // Celular
            $table->integer('usap_roll'); // Rol usuario(1-Admin,2-Cigarreria,3-Cliente)
            $table->integer('usap_esta'); // estado
            $table->timestamp('usap_fecr'); // Fecha de creación
            $table->integer('usap_idem')->unsigned(); // ID Empresa asociada
            $table->foreign('usap_idem')->references('emap_id')->on('emp_app'); // llave Foranea --> Tabla emp_app campo emap_id
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
        Schema::drop('usu_app');
    }
}
