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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('quantity')->nullable();
            $table->double('price')->nullable();
            $table->double('offer')->nullable()->comment('ex: 10 and this offer call percentise');
            $table->string('size')->nullable();
            $table->tinyInteger('in_stock')->default(1)->comment('0- stock out, 1 in_stock');
            $table->unsignedBigInteger('stock_in')->default(0);
            $table->unsignedBigInteger('stock_out')->default(0);
            $table->unsignedBigInteger('product_code')->default(0);
            $table->unsignedBigInteger('qr_code')->default(0);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
