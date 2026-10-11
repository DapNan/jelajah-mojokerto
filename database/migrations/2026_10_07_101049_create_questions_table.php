<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('mission_id')
                ->constrained('missions')
                ->cascadeOnDelete();

            $table->text('question');

            $table->string('type')->default('multiple_choice');

            $table->integer('points')->default(10);

            $table->integer('order')->default(0);

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};