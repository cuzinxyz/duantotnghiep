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
        Schema::create('collaborators', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('car_task')->nullable();
            $table->integer('buy_task')->nullable();
            $table->integer('support_task')->nullable();
            $table->integer('report_task')->nullable();
            $table->integer('salon_task')->nullable();
            $table->integer('recharge_task')->nullable();

            $table->integer('status')
                ->default(0)
                ->comment('Trạng thái xem CTV này đã làm hay chưa?');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborators');
    }
};
