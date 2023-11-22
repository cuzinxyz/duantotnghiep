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
      $table->string('city_id');
      $table->string('district_id');
      $table->string('full_address', 255);
      $table->boolean('recommended')->default(false);
      $table->json('contact');
      $table->json('car_info');
      $table->json('verhicle_image_library');
<<<<<<< HEAD
      $table->json('verhicle_videos')->nullable();
      $table->string('description');
      $table->string('status')->default(0); // 0 chờ duyệt - 1 Đã duyệt tin
=======
      $table->string('verhicle_videos')->nullable();
      $table->integer('status')->default(0);
      $table->text('reason')->nullable();
      $table->text('description')->nullable();
      $table->integer('model_id')->nullable();
>>>>>>> main
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
