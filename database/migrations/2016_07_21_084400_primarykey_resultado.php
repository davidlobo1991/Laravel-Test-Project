<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrimarykeyResultado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resultados', function (Blueprint $table) {
            $table->unique(['id_partido', 'id_user']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resultados', function (Blueprint $table) {
            $table->dropUnique(['id_partido', 'id_user']);
        });
    }
}
