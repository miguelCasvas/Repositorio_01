<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_pro', function (Blueprint $table) {
            $table->increments('capr_id'); // ID Cantegoria
            $table->string('capr_nomb'); // nombre Categoria
            $table->string('capr_deta'); // Detalle Categoria
            $table->integer('capr_esta'); // Estado Categoria
            $table->timestamp('capr_fecr'); // Fecha Creacion
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
        Schema::drop('cat_pro');
    }
}
