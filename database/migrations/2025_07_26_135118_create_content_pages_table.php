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
        Schema::create('content_pages', function (Blueprint $table) {
            $table->id();

            $table->longText('content_plain');
            $table->longText('content_html');

            $table->fullText('content_plain');
            $table->fullText('content_html');

            $table->foreignId('author_id')->constrained('authors');
            $table->foreignId('nav_id')->constrained('nav_items');
            $table->integer('positions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_pages');
    }
};
