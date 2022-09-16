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
            $table->id();
            $table->string("ic");
            $table->string("code_nm");
            $table->integer("version_nm");
            $table->string("titre");
            $table->string("origine");
            $table->string("version_originale");
            $table->timestamps();
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
