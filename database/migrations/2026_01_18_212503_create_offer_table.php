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
        Schema::create('offer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained('game')->onDelete('cascade');
            $table->foreignId('platform_id')->constrained('plataform')->onDelete('cascade');
            $table->decimal('price', 10, 2);
            $table->string('currency', 3)->default('BRL');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer');
    }
};
