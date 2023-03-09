<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->longText('description');
            $table->string('barcode_image')->nullable();
            $table->date('manufacture_date')->format('Y-m-d');
            $table->date('expiry_date')->format('Y-m-d');
            $table->integer('price');
            $table->string('currency')->default('INR');
            $table->integer('discount_price')->nullable();
            $table->string('referral_code_for_member')->nullable();
            $table->string('brand_name', 250);
            $table->integer('quantiy_available');
            $table->string('product_type', 250);
            $table->foreignId('seller_id')->constrained('mygyms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
