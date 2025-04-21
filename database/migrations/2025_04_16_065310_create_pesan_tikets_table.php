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
        Schema::create('pesan_tikets', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_tiket')->unique(); 
            $table->date('tanggal_pemesanan');
            $table->integer('jumlah'); 
            $table->string('nama_lengkap'); 
            $table->string('no_telepon');
            $table->string('email'); 
            $table->decimal('total_harga', 10, 2); 
            $table->enum('status', ['belum', 'selesai'])->default('belum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan_tikets');
    }
};
