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
        Schema::create('assignment_discussion_threads', function (Blueprint $table) {
            $table->id('discussion_thread_no'); // Primary key
            $table->unsignedBigInteger('assignment_id'); // Foreign key to `assignments`
            $table->uuid('user_id'); // Foreign key to `users`
            $table->text('comment');
            $table->timestamps();

            // Relationships
            $table->foreign('assignment_id')->references('assignment_id')->on('assignments')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment_discussion_threads');
    }
};
