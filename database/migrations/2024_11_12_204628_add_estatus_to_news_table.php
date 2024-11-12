<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEstatusToNewsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('news', function (Blueprint $table) {
            // Agregar la columna estatus
            $table->enum('status', ['En Revisión', 'Activo', 'Rechazado', 'Dado de Baja'])->default('En Revisión')->after('content'); // Se coloca después de la columna 'content' por ejemplo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            // Eliminar la columna estatus
            $table->dropColumn('status');
        });
    }
}
