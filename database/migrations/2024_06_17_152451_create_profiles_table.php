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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('gender')->nullable();
            $table->date('birthed_at')->index();
            $table->string('avatar_path')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('third_name')->nullable();
            $table->string('login')->unique();
            $table->foreignId('user_id')->index()->constrained('users');
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
        Schema::dropIfExists('profiles');
    }
};
