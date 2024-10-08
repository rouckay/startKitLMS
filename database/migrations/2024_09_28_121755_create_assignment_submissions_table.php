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
        Schema::create('assignment_submissions', function (Blueprint $table) {
            $table->unsignedBigInteger('assignment_id'); // Foreign key to `assignments`
            $table->uuid('user_id'); // Use unsignedBigInteger for consistency
            $table->unsignedBigInteger('submission_no'); // Consider making this primary key
            $table->text('status');
            $table->timestamps();

            // Composite primary key
            $table->primary(['assignment_id', 'user_id', 'submission_no']);

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
        Schema::dropIfExists('assignment_submissions');
    }
};
