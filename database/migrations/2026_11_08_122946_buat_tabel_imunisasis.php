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
    Schema::create('imunisasis', function (Blueprint $table) {
        $table->id();
        $table->foreignId('balita_id')->constrained('balitas')->cascadeOnDelete();
        $table->foreignId('kader_id')->constrained('users')->restrictOnDelete();
        $table->string('nama_imunisasi');
        $table->date('tanggal_pemberian');
        $table->string('dosis')->nullable();
        $table->text('catatan')->nullable();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('imunisasis');
}

};
