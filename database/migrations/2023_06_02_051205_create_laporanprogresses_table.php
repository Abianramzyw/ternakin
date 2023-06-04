<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporanprogresses', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_progress');
            $table->integer('berat_ternak');
            $table->text('deskripsi_progress');
            $table->string('image')->nullable();
            $table->foreignId('statuskesehatan_id');
            $table->foreignId('kondisiternak_id');
            $table->foreignId('hasilternak_id');
            $table->foreignId('user_id');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('laporanprogresses');
    }
};