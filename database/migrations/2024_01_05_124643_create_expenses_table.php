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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('activity_account_id');
            $table->decimal('beginning_cash_balance', 23, 3);
            $table->decimal('amount_IDR', 23, 3);
            $table->decimal('amount_USD', 23, 3);
            $table->decimal('exchange_rate_IDR_to_USD', 23, 3);
            $table->decimal('end_cash_balance', 23, 3);
            $table->text('detail');
            $table->timestamps();

            $table->foreign('activity_account_id')->references('id')->on('activity_accounts')->restrictOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
