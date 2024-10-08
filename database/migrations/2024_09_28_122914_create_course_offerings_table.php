<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_offerings', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id'); // Foreign key to `courses`
            $table->unsignedBigInteger('term_id'); // Foreign key to `course_term`
            $table->timestamps();

            // Composite primary key
            $table->primary(['course_id', 'term_id']);

            // Relationships
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            $table->foreign('term_id')->references('term_id')->on('course_term')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_offerings');
    }
};
