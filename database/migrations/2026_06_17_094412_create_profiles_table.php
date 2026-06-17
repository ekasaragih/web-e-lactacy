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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('hamil_ke')->nullable();
            $table->date('tanggal_lahir_bayi')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->date('hpht')->nullable();
            $table->decimal('bb_sebelum_hamil', 5, 2)->nullable();
            $table->decimal('bb_sekarang', 5, 2)->nullable();
            $table->text('masalah_kehamilan')->nullable();
            $table->boolean('persetujuan_penelitian');
            $table->boolean('persetujuan_data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
