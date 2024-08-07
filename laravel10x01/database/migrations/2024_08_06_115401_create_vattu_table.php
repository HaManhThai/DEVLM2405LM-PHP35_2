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
        Schema::create('vattu', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            // tạo cấu trúc các cột trong bảng
            // vattu{MaVTu,TenVTu,DvTinh,Phantram}
            $table->string('MaVTu')->primary();
            $table->string('TenVTu',500);
            $table->string('DvTinh',50);
            $table->float('Phantram');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vattu');
    }
};
