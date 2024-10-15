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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('total_amount')->nullable();
            $table->integer('total_qty')->nullable();
            $table->integer('total')->nullable();
            $table->integer('delivery_cost')->nullable();
            $table->integer('shipping_cost');
            $table->integer('shipping_type');
            $table->string('message')->nullable();
            $table->string('invoice_id');
            $table->integer('status')->default(1)->comment('0=cancel,1=pending,2=recived,3=delivered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
