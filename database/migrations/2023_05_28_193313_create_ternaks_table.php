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
            $table->foreignId('jenisternak_id');
            // $table->foreignId('jeniskelamin_id');
            // $table->foreignId('statusterjual_id');
            $table->foreignId('user_id');
            $table->string('nama_pemilik');
            $table->string('jenis_ternak');
            $table->string('berat_ternak');
            // $table->date('tanggal_lahir');
            $table->string('status_terjual');
            $table->text('deskripsi_tambahan');
            $table->string('image')->nullable();
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