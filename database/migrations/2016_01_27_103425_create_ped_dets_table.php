<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ped_det', function (Blueprint $table) {
            $table->increments('depe_id'); // ID Pedidos

            $table->integer('depe_cant'); // Cantidad Producto
            $table->double('depe_vaun'); // Vlr Unitario
            $table->double('depe_vato'); // Vlr Total
            $table->integer('depe_pema')->unsigned(); // ID Maestra Pedidos --> llave Foranea --> Tabla ped_mae campo pema_id
            $table->integer('depe_idpr')->unsigned(); // ID Relacion Empresa --> Producto  --> Llave Foranea --> Tabla rel_pro campo repr_id

            $table->foreign('depe_pema')->references('pema_id')->on('ped_mae');
            $table->foreign('depe_idpr')->references('repr_id')->on('rel_pro');
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
        Schema::drop('ped_det');
    }
}
