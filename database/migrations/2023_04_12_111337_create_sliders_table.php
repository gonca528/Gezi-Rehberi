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
        Schema::create('sliders', function (Blueprint $table) {
           $table->id();
           $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
           $table->string('post_ad');
            $table->text('excerpt');
            $table->string('thumbnail')->nullable();
            $table->timestamps();
            $table->timestamp('published_at')->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
