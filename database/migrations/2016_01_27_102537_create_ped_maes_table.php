<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedMaesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ped_mae', function (Blueprint $table) {
            $table->increments('pema_id'); // ID Maestra Pedidos
            $table->string('pema_ubic'); // Ubicacion Entrega
            $table->integer('pema_celu'); // Numero Celular
            $table->double('pema_neto'); // Vlr Neto
            $table->double('pema_vaiv'); // Vlr Iva
            $table->double('pema_vato'); // Vlr Total
            $table->integer('pema_esta'); // Estado
            $table->timestamp('pema_fecr'); // Fecha Creacion
            $table->integer('pema_usid')->unsigned(); // Usuario que hace el pedido --> llave Foranea --> Tabla usu_app campo usap_id

            $table->foreign('pema_usid')->references('usap_id')->on('usu_app');
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
        Schema::drop('ped_mae');
    }
}
