
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mission_reflections', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('mission_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->json('answers');

            $table->timestamps();

            // Satu refleksi per pengguna untuk setiap misi.
            $table->unique(['user_id', 'mission_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mission_reflections');
    }
};
