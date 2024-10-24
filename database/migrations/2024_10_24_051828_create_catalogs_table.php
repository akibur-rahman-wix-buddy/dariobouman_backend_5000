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
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->enum('category', ['sneakers', 'shoes', 'apparel', 'accessories','collectibles', 'trading cards']);
            $table->string('title');
            $table->json('variants')->nullable(); 
            $table->string('brand');
            $table->float('retail_price');
            $table->date('release_date');
            $table->string('country_of_origin',2);
            $table->string('partner_product_id')->nullable();
            $table->string('colorway');
            $table->string('gtin');
            $table->enum('gender', ['male', 'female']);
            $table->string('style_code');
            $table->text('description')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('weight')->nullable();
            $table->string('material')->nullable();
            $table->string('url')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogs');
    }
};
