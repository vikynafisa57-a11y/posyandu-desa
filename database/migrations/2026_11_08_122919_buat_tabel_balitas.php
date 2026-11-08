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
        Schema::create('balitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orang_tua_id')->constrained('orang_tuas')->cascadeOnDelete();
            $table->foreignId('posyandu_id')->constrained('posyandus')->cascadeOnDelete();
            $table->string('nama_lengkap');
            $table->string('nik')->nullable()->unique();
            $table->string('jenis_kelamin', 1);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir')->nullable();
            $table->string('nama_ibu');
            $table->string('nama_ayah')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('balitas');
    }
};
