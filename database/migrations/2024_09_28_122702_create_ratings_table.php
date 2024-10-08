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
        Schema::create('ratings', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id'); // Foreign key to `courses`
            $table->uuid('user_id'); // Foreign key to `users`
            $table->unsignedBigInteger('rating_scale'); // Rating scale
            $table->text('feedback');
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
        Schema::dropIfExists('ratings');
    }
};
