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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('text')->nullable();

            // Nullable relation to blogs
            $table->foreignId('blog_id')->nullable()
                  ->constrained('blogs')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();

            $table->string('name');
            $table->string('profile_photo')->nullable(); // path under storage/app/public

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
