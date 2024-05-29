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
        Schema::create('user_payment_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->int('credit_card_number');
            // $table->timestamp('credit_card_expiration_date');  //imo I think this is a better approach.
            $table->int('expiry_month');
            $table->int('expiry_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_payment_info');
    }
};
