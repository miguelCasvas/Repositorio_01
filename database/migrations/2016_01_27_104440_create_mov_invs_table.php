<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovInvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mov_invs', function (Blueprint $table) {
            $table->increments('moin_id'); // ID movimiento

            $table->integer('moin_timo'); // Tipo Movimiento (entrada / salida)
            $table->double('moin_cant'); // Total
            $table->timestamp('moin_fecr'); // Fecha creacion
            $table->integer('moin_idre')->unsigned(); // ID Relacion Empresa --> Producto  --> Llave Foranea --> Tabla rel_pro campo repr_id

            $table->foreign('moin_idre')->references('repr_id')->on('rel_pro');

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
        Schema::drop('mov_invs');
    }
}
