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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');                               // canonical name
            $table->string('slug')->unique();                     // auto generated
            $table->string('title');                              // page/post title
            $table->string('short_des', 500)->nullable();         // short description
            $table->longText('des')->nullable();                  // full description (HTML allowed)
            $table->string('writer_name')->nullable();

            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();

            $table->string('keywords')->nullable();               // comma-separated or small list
            $table->string('meta_title')->nullable();
            $table->string('meta_des', 500)->nullable();
            $table->string('image_alt_text')->nullable();

            $table->text('ai_help')->nullable();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
