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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incremented primary key
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 8, 2)->nullable();
            $table->unsignedBigInteger('category_id'); // Foreign key to categories table
            $table->integer('stock');
            $table->tinyInteger('rating')->nullable()->comment('Rating from 1 to 5');
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->text('description')->nullable();
            $table->timestamps();

            // Define foreign key
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
