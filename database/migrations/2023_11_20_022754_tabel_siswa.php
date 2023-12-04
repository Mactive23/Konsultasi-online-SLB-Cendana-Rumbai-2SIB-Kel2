<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('id_siswa')->unique();
            $table->text('informasi_kesehatan');
            $table->text('data_pendidikan');
            $table->text('data_kontak');
            $table->text('data_konseling');
            $table->text('data_identitas_siswa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};