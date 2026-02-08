<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vehiculos', function (Blueprint $table): void {
            $table->id();
            $table->string('placa', 15)->unique();
            $table->string('tipo', 20);
            $table->string('marca', 50);
            $table->string('color', 30);
            $table->string('propietario', 120);
            $table->string('telefono', 20)->nullable();
            $table->dateTime('hora_entrada');
            $table->dateTime('hora_salida')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
