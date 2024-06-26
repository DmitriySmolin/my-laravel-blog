<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->text('description')->nullable();
            $table->date('published_at')->nullable();
            $table->string('image_path')->nullable();
            $table->unsignedSmallInteger('status')->default(1);
<<<<<<< HEAD
            $table->string('author')->nullable();
            $table->string('category')->nullable();
            $table->text('tag')->nullable();
=======
            $table->foreignId('profile_id')->index()->constrained('profiles');
            $table->foreignId('category_id')->index()->constrained('categories');
            $table->string('author');
            $table->string('category');
            $table->text('tag');
>>>>>>> 696320011b7269b518b83138f24dc59d49de8c1a
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
