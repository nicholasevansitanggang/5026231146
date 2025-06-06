<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('pegawai', function (Blueprint $table) {
        $table->id('pegawai_id');
        $table->string('pegawai_nama');
        $table->string('pegawai_jabatan');
        $table->text('pegawai_alamat');
        $table->integer('pegawai_umur');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
