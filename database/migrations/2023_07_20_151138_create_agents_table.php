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
            $table->string('nom',20);
            $table->string('postnom',20);
            $table->string('prenom',20)->nullable();
            $table->string('civilite',8);
            $table->string('document',50);
            $table->string('photo',50);
            $table->string('contact',13);
            $table->string('email',50);
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
