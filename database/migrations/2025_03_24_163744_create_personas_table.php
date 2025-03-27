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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tp_documento')->nullable()->constrained('tipo_documentos')->onDelete('set null');
            $table->string('nro_documento')->unique();
            $table->string('ap_paterno', 100);
            $table->string('ap_materno', 100);
            $table->string('nombres', 100);
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento', 100);
            $table->foreignID('estado_civil')->nullable()->constrained('estado_civils')->onDelete('set null');
            $table->foreignID('grado_academico')->nullable()->constrained('grado_academicos')->onDelete('set null');
            $table->foreignID('sexo')->nullable()->constrained('sexos')->onDelete('set null');
            $table->string('ocupacion', 100);
            $table->string('centro_laboral', 100);
            $table->string('direccion', 255);
            $table->foreignId('distrito')->nullable()->constrained('ubigeos')->onDelete('set null');
            $table->foreignID('raza')->nullable()->constrained('razas')->onDelete('set null');
            $table->foreignID('religion')->nullable()->constrained('religions')->onDelete('set null');
            $table->string('telefono_celular', 15);
            $table->string('email', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
