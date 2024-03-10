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
        Schema::create('arbres', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->foreignId('espece_id')->constrained();
            $table->string('note', 255)->default();
            $table->date('date_entree')->nullable();
            $table->date('date_sortie')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arbres');
    }
};
