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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->double('original_price')->nullable();
            $table->double('selling_price')->nullable();
            $table->double('offer_price')->nullable();
            $table->string('image')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('product_code')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('show_hot_deal')->nullable();
            $table->string('stock')->nullable();
            $table->string('stock_out')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
