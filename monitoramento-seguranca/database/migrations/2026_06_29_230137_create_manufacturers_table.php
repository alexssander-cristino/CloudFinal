<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('manufacturers', function (Blueprint $table) {

            $table->id();

            $table->uuid('uuid')->unique();

            $table->string('nome');

            $table->string('site')->nullable();

            $table->string('suporte')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('manufacturers');
    }
};