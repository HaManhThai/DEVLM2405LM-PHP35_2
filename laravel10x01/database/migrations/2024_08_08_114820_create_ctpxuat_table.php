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


            $table->string('SoPx',4);
            $table->string('Mavtu',4);
            $table->integer('SLXuat');
            $table->float('DGXuat');

            $table->primary(['SoPx','Mavtu']);
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
        // Schema::table('ctpxuat', function (Blueprint $table) {
        //     $table->dropForeign('ctpxuat_vattu_mavtu_foreign');
        //     $table->dropForeign('ctpxuat_pxuat_sopx_foreign');
        // });
    }
};
