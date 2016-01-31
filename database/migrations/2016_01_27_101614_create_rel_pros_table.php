<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_pro', function (Blueprint $table) {
            $table->increments('repr_id'); // ID Relacion
            $table->integer('repr_cant'); // Cantidad existente
            $table->timestamp('repr_fecr'); // Fecha Creacion
            $table->integer('repr_idem')->unsigned(); // ID Empresa --> Llave foranea --> Tabla emp_app campo emap_id
            $table->integer('repr_idpr')->unsigned(); // ID Producto --> Llave foranea --> Tabla pro_app campo prap_id

            $table->foreign('repr_idem')->references('emap_id')->on('emp_app');
            $table->foreign('repr_idpr')->references('prap_id')->on('pro_app');
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
        Schema::drop('rel_pro');
    }
}
