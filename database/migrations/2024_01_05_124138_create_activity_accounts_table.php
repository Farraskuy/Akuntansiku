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
        Schema::create('activity_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_activity_account_id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();

            $table->foreign('category_activity_account_id')->references('id')->on('category_activity_accounts')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_activity_accounts');
    }
};
