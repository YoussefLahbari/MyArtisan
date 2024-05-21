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
        Schema::create('services', function (Blueprint $table) {
            $table->id('ServiceID');
            $table->string('Tittle');
            $table->string('Description');
            $table->string('Price');
            $table->unsignedBigInteger('Categorie_ID');
            $table->unsignedBigInteger('Location_ID');
            $table->unsignedBigInteger('Artisan_ID');
            $table->timestamps();
            $table->foreign('Categorie_ID')->references('CategorieID')->on('Categories');
            $table->foreign('Location_ID')->references('LocationID')->on('Locations');
            $table->foreign('Artisan_ID')->references('ArtisanID')->on('Artisans');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
