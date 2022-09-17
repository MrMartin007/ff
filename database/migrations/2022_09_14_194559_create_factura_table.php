<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('sesion_ft');
            $table->string('cod_servicio');
            $table->string('login_usr');
            $table->string('emicion_ft');
            $table->string('total_ft')->default('0.00');
            $table->string('nit_ft')->default('c/f');
            $table->string('nombre_ft');
            $table->string('direccion_ft');
            $table->string('iva_ft');
            $table->string('serie_ft');
            $table->string('numero_ft');
            $table->string('estado_ft')->default('P');
            $table->string('comentario_ft');
            $table->date('fechcreado_ft');
            $table->string('seriefel_ft');
            $table->string('numerofel_ft');
            $table->string('autorizacionfel_ft');
            $table->date('fechacertfel_ft');
            $table->string('direcesta_ft');
            $table->string('nombresta_ft');
            $table->date('fechacreadofel_ft');
            $table->string('tipo_ft');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
