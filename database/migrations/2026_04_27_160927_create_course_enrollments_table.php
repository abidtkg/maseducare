<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 100);
            $table->string('phone', 20);
            $table->string('email', 100)->nullable();
            $table->enum('course', ['n5', 'n4', 'visa_processing', 'interview_prep']);
            $table->string('education', 100)->nullable();
            $table->text('message')->nullable();
            $table->enum('status', ['new', 'contacted', 'enrolled', 'rejected'])->default('new');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_enrollments');
    }
};
