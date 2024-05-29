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
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name')->unique();
            $table->string('cat_color');
            $table->text('cat_description');
            // $table->boolean('good_boy_status')->default(true); 
            $table->boolean('good_cat_status')->default(false);   // cats can be not boys :(
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cats');
    }
};
