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
            $table->id(); // Auto-increment primary key
            $table->string('name', 255); // Product name
            $table->text('description')->nullable(); // Product description
            $table->decimal('price', 10, 2); // Price with precision
            $table->decimal('discount', 10, 2)->nullable(); // Discount on the price
            $table->integer('stock')->default(0); // Stock quantity
            $table->unsignedBigInteger('category_id'); // Foreign key for category
            $table->string('image', 255)->nullable(); // Image file or URL
            $table->decimal('rating', 2, 1)->nullable(); // Average product rating
            $table->enum('status', ['active', 'inactive'])->default('active'); // Product availability status
            $table->timestamps(); // `created_at` and `updated_at` columns

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
