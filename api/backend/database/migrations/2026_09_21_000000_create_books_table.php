<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the `books` table in MySQL.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('genre');
            $table->timestamps();
        });
    }

    /**
     * Drop the `books` table (php artisan migrate:rollback).
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
