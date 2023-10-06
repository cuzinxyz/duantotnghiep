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
    Schema::create('buy_vehicles', function (Blueprint $table) {
      $table->id();
      $table->integer('user_id');
      $table->integer('brand_id');
      $table->integer('model_car_id');
      $table->boolean('status')->default(0);
      $table->timestamps();
      $table->softDeletes(); // add
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('buy_vehicles');
  }
};
