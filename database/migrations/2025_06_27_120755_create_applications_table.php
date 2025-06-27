<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // candidate
            $table->foreignId('job_listing_id')->constrained()->onDelete('cascade');
            $table->text('cover_letter')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'job_listing_id']); // prevent duplicate applications
        });
    }

    public function down(): void {
        Schema::dropIfExists('applications');
    }
};
