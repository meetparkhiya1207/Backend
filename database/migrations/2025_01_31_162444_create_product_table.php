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
        Schema::create('products', function (Blueprint $table) { // Table name should be plural by convention
            $table->id();
            $table->integer('reference_number')->unique();
            $table->string('product_name');
            $table->string('product_type');
            $table->string('product_image');
            $table->decimal('product_price', 10, 2);
            $table->string('product_size')->nullable();
            $table->string('product_color')->nullable();
            $table->enum('isActive',['0','1'])->default('1');
            $table->timestamps();
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
