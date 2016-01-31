<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_app', function (Blueprint $table) {
            $table->increments('prap_id'); // ID Producto

            $table->text('prap_desc'); // Descripcion
            $table->string('prap_marc'); // Marca
            $table->string('prap_impr'); // Imagen Producto
            $table->double('prap_prec'); // Precio
            $table->string('prap_unme'); // Unid. Medida
            $table->integer('prap_esta'); // Estado detalle
            $table->timestamp('prap_fecr'); // fecha Creacion
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
        Schema::drop('pro_app');
    }
}
