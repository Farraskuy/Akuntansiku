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
<<<<<<< HEAD
            $table->unsignedBigInteger('main_activity_account_id');
=======
            $table->unsignedBigInteger('category_activity_account_id');
>>>>>>> e11ae0830b1c36cb86a38cda53a3913167a8084a
            $table->string('name');
            $table->text('description');
            $table->timestamps();

<<<<<<< HEAD
            $table->foreign('main_activity_account_id')->references('id')->on('main_activity_accounts')->restrictOnDelete();
=======
            $table->foreign('category_activity_account_id')->references('id')->on('category_activity_accounts')->restrictOnDelete();
>>>>>>> e11ae0830b1c36cb86a38cda53a3913167a8084a
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
