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
    Schema::create('information_posts', function (Blueprint $table) {
      $table->id();
      $table->foreignId("information_id")->references("id")->on("information")->cascadeOnDelete();
      $table->foreignId("post_id")->references("id")->on("posts")->cascadeOnDelete();
      $table->string("value");
      $table->timestamps();
    });
  }

  /**
   *
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('information_posts');
  }
};
