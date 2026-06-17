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
        Schema::create('pre_test_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->decimal('knowledge_score',5,2)->nullable();
            $table->decimal('sikap_score',5,2)->nullable();
            $table->decimal('motivasi_score',5,2)->nullable();
            $table->decimal('self_efficacy_score',5,2)->nullable();
            $table->decimal('niat_score',5,2)->nullable();
            $table->decimal('dukungan_sosial_score',5,2)->nullable();
            $table->timestamp('taken_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_test_scores');
    }
};
