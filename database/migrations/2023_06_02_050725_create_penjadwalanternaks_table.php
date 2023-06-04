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
        Schema::create('penjadwalanternaks', function (Blueprint $table) {
            $table->id();
            $table->datetime('tanggal_jadwal');
            $table->string('dokter');
            $table->foreignId('juduljadwal_id');
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
        Schema::dropIfExists('penjadwalanternaks');
    }
};