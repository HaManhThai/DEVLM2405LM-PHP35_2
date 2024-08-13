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
        Schema::create('ctpnhap', function (Blueprint $table) {
//            $table->id();
//            $table->timestamps();
            $table->string('SoPn',4);
            $table->string('Mavtu',4);
            $table->integer('SLNhap');
            $table->float('DGNhap');

            $table->primary(["SoPn","Mavtu"]);

            $table->foreign('Mavtu')->references('Mavtu')->on('vattu');
            $table->foreign('SoPn')->references('SoPn')->on('pnhap');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctpnhap');
        Schema::table('ctpnhap', function (Blueprint $table) {
            $table->dropForeign('ctpnhap_vattu_mavtu_foreign');
            $table->dropForeign('ctpnhap_pnhap_sopn_foreign');
        });


    }
};
