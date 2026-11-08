<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posyandus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_posyandu');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('nama_ketua')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posyandus');
    }
};
