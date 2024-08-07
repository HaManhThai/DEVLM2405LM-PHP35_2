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
        Schema::create('nhacc', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            // tạo bảng nhacc:
            $table->string('MaNCC',3)->primary();
            $table->string('TenNCC',100);
            $table->string('Diachi',200);
            $table->string('Dienthoai',20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhacc');
    }
};
