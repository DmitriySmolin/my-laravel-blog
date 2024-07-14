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
        Schema::create('likeable', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('post_id')->index()->constrained('posts');
            $table->morphs('likeable');
            $table->foreignId('profile_id')->index()->constrained('profiles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likeable');
    }
};