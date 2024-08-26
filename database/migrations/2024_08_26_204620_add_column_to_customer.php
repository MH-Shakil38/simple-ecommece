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
        Schema::table('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('shipping_cost')->default(0);
            $table->unsignedBigInteger('shipping_type')->default(0);
            $table->string('message')->nullable();
            $table->string('order_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('shipping_cost');
            $table->dropColumn('shipping_type');
            $table->dropColumn('message');
            $table->dropColumn('order_number');
        });
    }
};
