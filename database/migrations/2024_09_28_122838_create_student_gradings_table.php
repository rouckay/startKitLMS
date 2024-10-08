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
        Schema::create('student_grading', function (Blueprint $table) {
            $table->uuid('user_id'); // Foreign key to `users`
            $table->unsignedBigInteger('course_id'); // Foreign key to `courses`
            $table->unsignedBigInteger('grade_id'); // Foreign key to `grade`
            $table->text('grade_details');
            $table->timestamps();

            // Composite primary key
            $table->primary(['user_id', 'course_id', 'grade_id']);

            // Relationships
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            $table->foreign('grade_id')->references('grade_id')->on('grades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_gradings');
    }
};
