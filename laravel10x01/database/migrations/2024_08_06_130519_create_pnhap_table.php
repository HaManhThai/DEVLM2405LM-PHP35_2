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
        Schema::create('pnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();

            $table->string('SoPn',4)->primary();
            $table->date('NgaNhap');
            $table->string('SoKH',4);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pnhap');
    }
};
