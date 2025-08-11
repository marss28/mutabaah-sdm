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
    Schema::table('tugas_harian', function (Blueprint $table) {
        $table->unsignedBigInteger('datatugasharian_id');

        // Kalau mau langsung bikin foreign key:
        $table->foreign('datatugasharian_id')
              ->references('id')
              ->on('datatugasharian')
              ->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('tugas_harian', function (Blueprint $table) {
        $table->dropForeign(['datatugasharian_id']);
        $table->dropColumn('datatugasharian_id');
    });
}

};
