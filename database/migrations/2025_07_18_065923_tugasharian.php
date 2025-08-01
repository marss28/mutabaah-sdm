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
        Schema::create('tugas_harian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datatugasharian_id');
            $table->time('waktu_tugas');
            $table->string('deskripsi');
            $table->timestamps();

            $table->foreign('datatugasharian_id')->references('id')->on('datatugasharian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('tugas_harian');
    }

};
