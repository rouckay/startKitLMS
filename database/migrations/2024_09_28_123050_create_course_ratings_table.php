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
        Schema::create('course_ratings', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id'); // Foreign key to `courses`
            $table->uuid('user_id'); // Foreign key to `users` (student)
            $table->unsignedTinyInteger('rating'); // Rating scale (e.g., 1-5)
            $table->text('feedback')->nullable(); // Optional feedback
            $table->timestamps();

            // Composite primary key
            $table->primary(['course_id', 'user_id']);

            // Relationships
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_ratings');
    }
};
