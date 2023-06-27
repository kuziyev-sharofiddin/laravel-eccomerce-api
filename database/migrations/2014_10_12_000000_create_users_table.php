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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(column:'first_name');
            $table->string(column:'last_name');
            $table->string(column:'email')->unique();
            $table->string(column:'phone')->unique();
            $table->timestamp(column:'email_verified_at')->nullable();
            $table->string(column:'password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
