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
        Schema::create('datatransaksis', function (Blueprint $table) {
            $table->id();
            $table->string('alamat_transaksi');
            $table->integer('no_rekening');
            $table->string('tanggal_transaksi');
            $table->foreignId('pembayarantransaksi_id');
            $table->foreignId('user_id');
            $table->foreignId('user_role_id');
            $table->foreignId('dataproduk_id');
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
        Schema::dropIfExists('datatransaksis');
    }
};
