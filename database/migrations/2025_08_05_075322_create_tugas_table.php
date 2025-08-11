<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tugas_harian', function (Blueprint $table) {
            $table->id();
            $table->string('jenis'); // misal "harian"
            $table->string('nama_tugas');
            $table->timestamp('waktu_tugas');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        Schema::create('tugas_mingguan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis'); // misal "mingguan"
            $table->string('nama_tugas');
            $table->timestamp('waktu_tugas');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        Schema::create('tugas_bulanan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis'); // misal "bulanan"
            $table->string('nama_tugas');
            $table->timestamp('waktu_tugas');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tugas_bulanan');
        Schema::dropIfExists('tugas_mingguan');
        Schema::dropIfExists('tugas_harian');
    }
};
