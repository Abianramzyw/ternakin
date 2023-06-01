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
        Schema::create('akun', function (Blueprint $table) {
            $table->id('id');
            // $table->foreignId('role_id');
            $table->string('nama_akun');
            $table->string('email_akun')->unique();
            $table->string('alamat_akun');
            $table->string('password_akun');
            $table->timestamps();
        });
        //aku bingung disini, bingung pake columnd akun, sama kalo gapake timestamps error
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            // $table->foreignId('role_id');
            $table->string('nama_akun');
            $table->string('email_akun')->unique();
            $table->string('alamat_akun');
            $table->string('password');
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
        Schema::dropIfExists('akun');
    }
};