<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaiAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pai_app', function (Blueprint $table) {
            $table->increments('paap_id'); // id de la tabla
            $table->decimal('paap_codi'); // Codigo del pais
            $table->string('paap_nomb'); // nombre pais
            $table->string('paap_indi'); // indicativo pais
            $table->timestamp('paap_fecr'); // fecha creacion del registro
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
        Schema::drop('pai_app');
    }
}
