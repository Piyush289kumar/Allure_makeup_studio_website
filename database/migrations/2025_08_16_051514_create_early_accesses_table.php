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
        Schema::create('early_accesses', function (Blueprint $table) {
            $table->id();
            // Required email for communication and updates
            $table->string('email')->unique();

            // Optional user details
            $table->string('name')->nullable();
            $table->string('company')->nullable();
            $table->string('job_title')->nullable();
            $table->text('notes')->nullable();

            // Additional future-proof fields
            $table->string('country')->nullable();       // For segmenting by region
            $table->string('source')->nullable();        // How the user found your product (referral, ad, organic)
            $table->json('interests')->nullable();       // Features or categories the user is interested in
            $table->boolean('subscribed')->default(true); // For newsletter or update subscription
            $table->ipAddress('signup_ip')->nullable();  // Track IP for security or analytics
            $table->string('referral_code')->nullable(); // If user signed up via a referral program
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('early_accesses');
    }
};
