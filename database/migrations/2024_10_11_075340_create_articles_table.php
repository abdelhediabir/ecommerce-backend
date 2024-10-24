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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->String('designation',100)->unique();
            $table->String('reference',50)->index();
            $table->String('marque',50)->nullable();
            $table->integer('qtestock')->unsigned();//usigned:entier positive
            $table->decimal('prix',8,2);
            $table->string ('imageart',200)->nullable();
            $table->unsignedBigInteger('scategorieID');
            $table->foreign('scategorieID')->references('id')->on('scategories')->onDelete('restrict');



    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
