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
        Schema::table('tmp_orders', function (Blueprint $table) {
            $table->integer('status')->comment('0-cancel,1-pending,2-recived,3-delivered')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tmp_orders', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
