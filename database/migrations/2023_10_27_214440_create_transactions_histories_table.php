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
        Schema::create('transactions_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('transaction_type')->comment('Loại giao dịch: nạp tiền | thanh toán dịch vụ');
            $table->double('amount');
            $table->double('balance_after_transaction');
            $table->text('token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions_histories');
    }
};
