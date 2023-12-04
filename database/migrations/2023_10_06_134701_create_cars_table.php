<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('cars', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('slug');
      $table->bigInteger('price');
      $table->integer('user_id');
      $table->integer('brand_id');
      $table->integer('model_car_id');
      $table->string('city_id')->nullable();
      $table->string('district_id')->nullable();
      $table->string('full_address', 255);
      $table->boolean('recommended')->default(false);
      $table->json('contact');
      $table->json('car_info');
      $table->json('verhicle_image_library');
      $table->string('verhicle_videos')->nullable();
      $table->integer('status')->default(0);
      $table->text('reason')->nullable();
      $table->text('description')->nullable();
      $table->integer('model_id')->nullable();
      $table->integer('garage_id')->nullable();
      $table->integer('salon_id')->nullable();
      $table->integer('collaborator_id')->nullable();
      $table->timestamps();
      $table->softDeletes(); // add
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('cars');
  }
};
