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
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id(); // Membuat kolom id (BIGINT, auto-increment, primary key)
            $table->string('nama_mk'); // Membuat kolom nama_mk (VARCHAR)
            $table->integer('sks');   // Membuat kolom sks (INTEGER)
            $table->timestamps();     // Membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliah');
    }
};