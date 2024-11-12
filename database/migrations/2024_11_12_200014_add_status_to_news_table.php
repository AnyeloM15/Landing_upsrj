<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->tinyInteger('status')->default(0)->comment('0 = en revisión, 1 = aprobado, 2 = rechazado');
        });
    }
    
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
