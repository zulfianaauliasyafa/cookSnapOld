<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RESEP', function (Blueprint $table) {
            $table->id();
            $table->string('resep');
            $table->string('porsi');
            $table->string('image')->nullable(); // jika image bisa kosong
            $table->text('deskripsi')->nullable(); // jika lirik bisa kosong
            $table->string('tahapan')->nullable(); // jika link bisa kosong
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
        Schema::dropIfExists('music');
    }
}
