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
    Schema::create('saved_cars', function (Blueprint $table) {
      $table->id();
      $table->foreignIdFor(\App\Models\User::class, 'user_id');
      $table->foreignIdFor(\App\Models\Car::class, 'car_id');
      $table->timestamps();
      $table->softDeletes(); // add
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('saved_cars');
  }
};
