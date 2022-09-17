<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallefacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallefactura', function (Blueprint $table) {
            $table->bigIncrements('cod_detalle');
            $table->string('login_usr');
            $table->string('sesion_ft');
            $table->string('mes_df');
            $table->string('anio_df');
            $table->string('monto_df');
            $table->string('estado_df')->default('P');
            $table->string('concepto_df');
            $table->string('mora_df');
            $table->string('descuento_df');
            $table->string('fechcreado_df');
            $table->string('cantidad_df');
            $table->string('punidad_df');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallefactura');
    }
}
