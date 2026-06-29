<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cameras', function (Blueprint $table) {

            $table->id();

            $table->uuid('uuid')->unique();

            $table->string('nome');

            $table->text('descricao')->nullable();

            $table->ipAddress('ip');

            $table->unsignedInteger('porta')->default(554);

            $table->foreignId('fabricante_id')
                  ->constrained('manufacturers')
                  ->cascadeOnDelete();

            $table->foreignId('location_id')
                  ->constrained('locations')
                  ->cascadeOnDelete();

            $table->string('modelo');

            $table->string('serial')->unique();

            $table->string('mac_address')->unique();

            $table->string('resolucao')->default('1920x1080');

            $table->unsignedTinyInteger('fps')->default(30);

            $table->string('codec')->default('H264');

            $table->enum('status', [
                'online',
                'offline',
                'manutencao'
            ])->default('online');

            $table->timestamp('ultima_comunicacao')->nullable();

            $table->softDeletes();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cameras');
    }
};