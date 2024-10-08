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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->uuid('user_id'); // Foreign key to `users` for students
            $table->unsignedBigInteger('course_id'); // Foreign key to `courses`
            $table->unsignedBigInteger('payment_mode_id'); // Foreign key to `payment_modes`
            $table->timestamps();

            // Composite primary key
            $table->primary(['user_id', 'course_id']);

            // Relationships
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            $table->foreign('payment_mode_id')->references('payment_mode_id')->on('payment_modes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
