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
        Schema::create('medicines', function (Blueprint $table) {
        $table->id()->autoIncrement();
        $table->unsignedBigInteger('categories_id');
        
        $table->string('name')->nullable();
        $table->string('description')->nullable();
        $table->decimal('price', 8, 2)->nullable();
        $table->string('manufacturer')->nullable();
        $table->date('expiration_date')->nullable();
        $table->integer('stock')->nullable();
        $table->boolean('active')->default(true);

    
        $table->timestamps();

        $table->foreign('categories_id')->references('id')->on('categories')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
