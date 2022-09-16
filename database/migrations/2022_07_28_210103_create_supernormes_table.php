<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupernormesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supernormes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('IC')->nullable();
            $table->string('Code_NM')->nullable();
            $table->integer('Version_ NM')->nullable();
            $table->text('Titre')->nullable();
            $table->string('Origine')->nullable();
            $table->string('Version_Originale')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('supernormes');
    }
}
