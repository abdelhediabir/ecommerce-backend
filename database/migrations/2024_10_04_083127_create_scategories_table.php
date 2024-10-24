<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
            Schema::create('Scategories',function(Blueprint$table){
            $table->id();
            $table->string('nomcategories')->unique();
            $table->string('imagecategorie')->nullable();
            $table->unsignedBigInteger('categorieID')
            ->foreign("categorieID")
            ->references("id")
            ->on("categories")
            ->onDeelete("restrict");
            $table->timestamps();
        });
    
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scategories');
    }
};
