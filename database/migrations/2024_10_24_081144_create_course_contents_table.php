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
        Schema::create('course_contents', function (Blueprint $table) {
            $table->id();
            // Mendefinisikan foreign key yang merujuk ke 'course_categories'
            $table->foreignId('course_category_id')->constrained('course_categories')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('url');
            $table->string('content_type');
            $table->boolean('status');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_contents');
    }
};
