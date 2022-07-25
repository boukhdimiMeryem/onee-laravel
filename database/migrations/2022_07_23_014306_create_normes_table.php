<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normes', function (Blueprint $table) {
            $table->string('IC');
            $table->string('Code NM')->unique();
            $table->integer('Version NM');
            $table->text('Titre');
            $table->string('Origine');
            $table->string('Version Originale');
        });
    }

    /**
     * Reverse the migrations. 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('normes');
    }
};
