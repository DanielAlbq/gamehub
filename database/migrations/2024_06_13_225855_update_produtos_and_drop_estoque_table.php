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
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['estoque_id']);
            $table->dropColumn('estoque_id');
        });

        Schema::dropIfExists('estoque');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('estoque', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade')->default(0);
            $table->timestamps();
        });

        Schema::table('produtos', function (Blueprint $table) {
            $table->foreignId('estoque_id')->constrained('estoque'); // Adiciona de volta a coluna estoque_id
        });
    }
};
