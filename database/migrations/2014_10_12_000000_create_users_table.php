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
            $table->string('avatar')->default(config('chatify.user_avatar.default'));
            $table->string('account_balence')->default(0);
            $table->integer('service_id')->default(0);
            $table->string('phone_number')->nullable();
            $table->boolean('active_status')->default(0);
            $table->boolean('dark_mode')->default(0);
            $table->string('messenger_color')->nullable();
            $table->integer("total_pushed")->default(0);
            $table->timestamp("expired_date")->nullable()->comment("Ngày hết hạn của dịch vụ đã đăng ký");
            $table->integer('salon_id')->nullable();
            $table->boolean('active')->default(false)->comment('Kiểm tra xem tài khoản có đăng nhập không');
            $table->integer('is_collaborator')->default(0)->comment('0: không phải là nhân viên, 1: là Nhân viên');
            $table->integer('total_assign')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); // add
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
