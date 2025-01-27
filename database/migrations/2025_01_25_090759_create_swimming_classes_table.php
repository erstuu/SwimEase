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
        Schema::create('swimming_class', function (Blueprint $table) {
            $table->uuid('id_class')->primary();
            $table->uuid('jadwal_id');
            $table->foreign('jadwal_id')->references('id_jadwal')->on('jadwal')->onDelete('cascade');
            $table->text('deskripsi')->nullable();
            $table->enum('kelas', ['Anak-anak', 'Dewasa', 'Professional']);
            $table->string('instruktur');
            $table->integer('kuota')->default(10);
            $table->decimal('harga', 10, 2);
            $table->enum('status', ['buka', 'tutup'])->default('buka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('swimming_class');
    }
};
