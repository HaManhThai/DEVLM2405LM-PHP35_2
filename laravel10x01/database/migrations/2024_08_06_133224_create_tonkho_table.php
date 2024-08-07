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
        Schema::create('tonkho', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('NamThang',6);
            $table->string('Mavtu',4);
            $table->integer('SlDau');
            $table->integer('TongSLN');
            $table->integer('TongSLX');
            $table->integer('SLCuoi');
            $table->primary(['NamThang','Mavtu']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tonkho');
    }
};
