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
        Schema::create('demnads', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class, 'user_id');
            $table->integer('status');
            $table->text('content');
            $table->string('title');
            $table->text('reason');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demnads');
    }
};
