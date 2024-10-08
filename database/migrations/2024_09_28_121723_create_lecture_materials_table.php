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
        Schema::create('lecture_material', function (Blueprint $table) {
            $table->unsignedBigInteger('lecture_id'); // Foreign key to `lectures`
            $table->unsignedBigInteger('material_id'); // Foreign key to `material`
            $table->timestamps();

            // Composite primary key
            $table->primary(['lecture_id', 'material_id']);

            // Relationships
            $table->foreign('lecture_id')->references('lecture_id')->on('lectures')->onDelete('cascade');
            $table->foreign('material_id')->references('material_id')->on('material')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecture_material');
    }
};
