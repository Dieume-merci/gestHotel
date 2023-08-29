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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('logo')->default("/storage/files/files/company/logo/__company.png");
            $table->string('contact');
            $table->string('email');
            $table->string('sigle');
            $table->string('griffe')->default("/storage/files/files/company/griffe/__company.png");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
