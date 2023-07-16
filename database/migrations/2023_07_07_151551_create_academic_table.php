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
        Schema::create('academic', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
            $table->integer('nim');
            $table->string('nm_student');
            $table->string('cd_subject');
            $table->string('nm_subject');
            $table->integer('sks');
            $table->integer('semester');
            $table->string('grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic');
    }
};
