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
        Schema::create('aplikasi', function (Blueprint $table) {
            $table->id();
            $table->longText('foto_depan')->nullable();
            $table->longText('foto_tentang')->nullable();
            $table->longText('foto_info')->nullable();
            $table->longText('foto_berita')->nullable();
            $table->string('nama_aplikasi')->nullable();
            $table->string('judul_aplikasi')->nullable();
            $table->string('yel_yel')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->string('alamat')->nullable();
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
        Schema::dropIfExists('aplikasi');
    }
};
