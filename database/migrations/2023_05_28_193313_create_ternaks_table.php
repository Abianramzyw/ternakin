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
        Schema::create('dataternaks', function (Blueprint $table) {
            $table->id('id');
            // $table->string('nama_pemilik');
            $table->integer('berat_ternak');
            $table->date('tanggal_lahir');
            $table->text('deskripsi_tambahan');
            $table->string('image')->nullable();
            $table->foreignId('jeniskelamin_id');
            $table->foreignId('statusterjual_id');
            $table->foreignId('jenisternak_id');
            $table->foreignId('user_id');
            // $table->foreignId('user_role_id');
            // $table->foreignId('jadwalternak_id');
            // $table->foreignId('jadwalternak_juduljadwal_id');
            // $table->foreignId('laporanprogress_id');
            // $table->foreignId('laporanprogress_statuskesehatan_id');
            // $table->foreignId('laporanprogress_kondisi_id');
            // $table->foreignId('laporanprogress_hasilternak_id');
            // $table->string('slug')->unique();
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
        Schema::dropIfExists('dataternaks');
    }
};