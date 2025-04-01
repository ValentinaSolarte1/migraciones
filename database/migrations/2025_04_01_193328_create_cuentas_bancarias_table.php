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
        Schema::create('cuentas_bancarias', function (Blueprint $table) {
            $table->integerIncrements('id_cuenta'); // ID de la cuenta
            $table->string('nombre_titular'); // Nombre del titular
            $table->text('descripcion'); // Descripción
            $table->decimal('saldo', 15, 2); // Saldo con 15 enteros y 2 decimales
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas_bancarias');
    }
};
