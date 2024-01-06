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
        Schema::create('mutations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sender_account_id');
            $table->unsignedBigInteger('recepient_account_id');
            $table->decimal('beginning_cash_balance_recepient', 23, 3);
            $table->decimal('amount_IDR', 23, 3);
            $table->decimal('amount_USD', 23, 3);
            $table->decimal('exchange_rate_IDR_to_USD', 23, 3);
            $table->decimal('end_cash_balance_recepient', 23, 3);
            $table->enum('type', ['transfer', 'deposit']);
            $table->text('detail');
            $table->timestamps();

            $table->foreign('sender_account_id')->references('id')->on('cash_accounts')->restrictOnDelete();
            $table->foreign('recepient_account_id')->references('id')->on('cash_accounts')->restrictOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutations');
    }
};
