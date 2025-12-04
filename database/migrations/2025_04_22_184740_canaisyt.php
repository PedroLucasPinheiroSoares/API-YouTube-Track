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
        Schema::create('canais', function (Blueprint $table) {
            $table->id('id_canal')->primary(); 
            $table->string('nome')->unique(); 
            $table->string('foto')->nullable(); 
            $table->unsignedBigInteger('inscritos'); 
            $table->string('localidade'); 
            $table->unsignedBigInteger('visualizacoes'); 
            $table->date('data_criacao'); 
            $table->unsignedBigInteger('quantidade_videos');
            $table->string('video_famoso')->nullable(); 
            $table->decimal('receita', 15, 2); 
            $table->string('tipo'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canais');
    }
};