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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image');
            $table->foreignId('category_id')->constrained('post_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('status')->default(1)->comment('0 => unactive , 1 => active');
            $table->tinyInteger('commentable')->default(1)->comment('0 => unactive , 1 => active');
            $table->string('tags');
            $table->text('summary');
            $table->text('body');
            $table->integer('view')->default(0);
            $table->foreignId('author_id')->constrained('users');
            $table->timestamp('published_at');
            $table->string('slug')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
