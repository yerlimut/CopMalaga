<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idTipoPrestamo');
            $table->foreign('idTipoPrestamo')->references('id')->on('tipo_prestamo');
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->date('fechaSolicitud');
            $table->date('fechaAprobado');
            $table->date('fechaDesembolso');
            $table->unsignedBigInteger('idEstadoPrestamo');
            $table->foreign('idEstadoPrestamo')->references('id')->on('EstadoPrestamo');
            $table->string('documentoFiador');
            $table->decimal('valorDesembolso', 10, 2);
            $table->integer('numeroCuotas');
            $table->decimal('valorCuota', 10, 2);
            $table->date('fechaLiquidacionPrestamo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
