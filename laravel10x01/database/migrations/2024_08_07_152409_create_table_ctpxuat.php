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
        Schema::create('ctpxuat', function (Blueprint $table) {
            $table->primary(['SoPx','Mavtu']);

            $table->integer('SLXuat');
            $table->float('DGXuat');


        });

        Schema::table('ctpxuat', function (Blueprint $table) {
            $table->foreign('Mavtu')->references('Mavtu')->on('vattu');
            $table->foreign('SoPx')->references('SoPx')->on('pxuat');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctpxuat');
        Schema::table('ctpxuat', function (Blueprint $table) {
            $table->dropForeign('vattu_Mavtu');
            $table->dropForeign('pxuat_SoPX');
        });
    }
};
