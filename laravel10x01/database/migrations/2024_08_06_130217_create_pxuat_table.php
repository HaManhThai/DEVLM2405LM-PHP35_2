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
        Schema::create('pxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('SoPx',4)->primary();
            $table->date('NgayXuat');
            $table->string('TenKH',100);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pxuat');
    }
};
