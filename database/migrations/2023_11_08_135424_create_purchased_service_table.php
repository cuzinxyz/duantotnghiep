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
        Schema::create('purchased_service', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('ID cuả người dùng đã đăng kí');
            $table->integer('service_id');
            $table->string('car_id')
                ->nullable()
                ->comment("Cột này để lưu các xe đã được đẩy tin");
            $table->integer('remaining_push');
            $table->timestamp('expired_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchased_service');
    }
};
