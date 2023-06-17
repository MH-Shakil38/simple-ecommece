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
        Schema::create('tmp_orders', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('customer_id');
            $table->tinyInteger('product_id');
            $table->integer('qty');
            $table->integer('selling_price');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmp_orders');
    }
};
