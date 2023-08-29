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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domaine_id')->constrained()->onDelete('cascade');
            $table->foreignId('entreprise_id')->constrained()->onDelete('cascade');
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom')->nullable();
            $table->string('civilite');
            $table->string('document')->default("/storage/files/personals/documents/__document.png");
            $table->string('image')->default("/storage/files/personals/images/__avatar.png");
            $table->string('contact');
            $table->string('email');
            $table->string('fonction');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
