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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title_about_s1');
            $table->string('description_about_s1');
            $table->string('about1_s1');
            $table->string('about2_s1');
            $table->string('about3_s1');
            $table->string('about4_s1');
            $table->string('about_img1_s1');
            $table->string('about_img2_s1');
            $table->string('about_img3_s1');

            $table->string('title_about_s2');
            $table->string('description_about_s2');
            $table->string('about1_s2');
            $table->string('about2_s2');
            $table->string('about_video_s2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
