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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('phone_number');
            $table->string('email');
            $table->string('location');
            $table->string('logo');
            $table->string('cover');
            $table->string('bio');
            $table->string('title_background');
            $table->string('your_name');
            $table->string('title_card');
            $table->string('bio_card');
            $table->string('signature');
            $table->string('followers');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('website');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
