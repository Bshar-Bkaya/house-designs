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
      $table->string('name');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('phone');
      $table->foreignId("role_id")->default(2)->references("id")->on("roles")->onDelete("cascade");
      $table->timestamp('email_verified_at')->nullable();
      $table->integer('is_verified')->default(0);
      $table->string("reset_code", 255)->nullable();
      $table->boolean('status')->default(true);
      $table->string('image_path')->nullable();
      $table->enum('gender', ['male', 'female', 'other'])->nullable();
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('users');
  }
};