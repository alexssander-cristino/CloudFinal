<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sensors', function (Blueprint $table) {

            $table->id();

            $table->uuid('uuid')->unique();

            $table->string('nome');

            $table->enum('tipo', [
                'movimento',
                'fumaca',
                'temperatura',
                'porta',
                'janela',
                'presenca',
                'vibracao'
            ]);

            $table->enum('status', [
                'online',
                'offline',
                'manutencao'
            ])->default('online');

            $table->unsignedTinyInteger('bateria')->default(100);

            $table->decimal('valor_atual', 8, 2)->nullable();

            $table->timestamp('ultima_leitura')->nullable();

            $table->foreignId('location_id')
                  ->constrained('locations')
                  ->cascadeOnDelete();

            $table->softDeletes();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};