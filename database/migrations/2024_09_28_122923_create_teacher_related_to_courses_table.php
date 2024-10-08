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
        Schema::create('teacher_related_to_courses', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id'); // Foreign key to `courses`
            $table->uuid('user_id_teacher'); // Foreign key to `users` for teacher
            $table->timestamps();

            // Composite primary key
            $table->primary(['course_id', 'user_id_teacher']);

            // Relationships
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            $table->foreign('user_id_teacher')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_related_to_courses');
    }
};
