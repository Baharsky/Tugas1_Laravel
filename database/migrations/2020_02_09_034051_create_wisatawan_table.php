<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 30);
            $table->string('gender', 20);
            $table->string('umur', 11);
            $table->string('asal', 30);
            $table->string('foto', 50);
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
        Schema::dropIfExists('wisatawan');
    }
}
