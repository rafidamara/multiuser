<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration {
    public function up() {
        Schema::create('siswa', function (Blueprint $table) {
            $table->uuid('id_siswa');
            $table->string('nisn');
            $table->string('nama_siswa');
            $table->string('nomer_hp');
            $table->binary('photo');
            $table->string('tingkat');
            $table->string('jurusan');
            $table->string('kelas');
            $table->foreign('kelas')->references('id_kelas')->on('kelas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('email');
            $table->text('password');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('siswa');
    }
}
