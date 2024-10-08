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
        Schema::create('discussion_board_for_lectures', function (Blueprint $table) {
            $table->id('discussion_thread_no'); // Primary key
            $table->unsignedBigInteger('lecture_id'); // Foreign key to `lectures`
            $table->uuid('user_id'); // Foreign key to `users`
            $table->text('comment');
            $table->timestamps();

            // Relationships
            $table->foreign('lecture_id')->references('lecture_id')->on('lectures')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discussion_board_for_lectures');
    }
};
