<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ctdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();

            $table->string('SoDH',4);
            $table->string('Mavtu',4);
            $table->integer('SlDat');
            
            $table->primary(['SoDH','Mavtu']);
            $table->foreign('SoDH')->references('SoDH')->on('dondh');
            $table->foreign('Mavtu')->references('Mavtu')->on('vattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctdondh');
    }
};
