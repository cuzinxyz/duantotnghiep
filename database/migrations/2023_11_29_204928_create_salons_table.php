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
        Schema::create('salons', function (Blueprint $table) {
            $table->id();
            $table->string('salon_name');
            $table->string('address');
            $table->json('image_salon');
            $table->text('description');
            $table->string('phone_number', 15);
            $table->string('email');
            $table->datetime('expired_date')
                ->comment('Lưu ngày hết hạn của Garage, cần gia hạn để tiếp tục sử dụng')
                ->nullable();
            $table->integer('status')
                ->comment("0: đang chờ duyệt, 1: đã duyệt, 2: đã hết hạn")
                ->default(0);
            $table->string('reason')->nullable();
            $table->integer('user_id');
            $table->integer('collaborator_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salons');
    }
};
