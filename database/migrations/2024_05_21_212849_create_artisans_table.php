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
        Schema::create('artisans', function (Blueprint $table) {
            $table->id('ArtisanID');
            $table->string('Skills');
            $table->string('Experience');
            $table->string('Description');
            $table->String('ProfileImg');
            $table->string('Rating');
            $table->unsignedBigInteger('UserId');
            $table->foreign('UserId')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisans');
    }
};
