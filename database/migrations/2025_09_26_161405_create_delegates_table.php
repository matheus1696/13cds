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
        Schema::create('delegates', function (Blueprint $table) {
            $table->id();
            $table->string('cpf')->nullable()->unique();
            $table->string('name');
            $table->string('contact')->nullable();
            $table->boolean('is_whatsapp')->default(false);
            $table->enum('type', ['elected', 'substitute'])->default('substitute');
            
            $table->foreignId('segment_id')->constrained()->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delegates');
    }
};
