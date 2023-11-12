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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->integer('price');
            $table->text('description');
            $table->integer('expiration_date');
            $table->integer("number_of_pushes")->default(0)
                ->comment("Số lượt đẩy tin \ Miễn phí: 0, Tin lẻ, VIP");
            $table->string('title')->nullable();
            $table->timestamps();
            $table->softDeletes(); // add
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
