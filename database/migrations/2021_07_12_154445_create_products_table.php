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
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id')
            ->references('id')->on('sub_categories')
            ->onDelete('cascade');
            $table->string('product_title');
            $table->text('product_details');
            $table->text('product_summary');
            $table->string('product_writer')->nullable();
            $table->string('product_translator')->nullable();
            $table->string('product_publisher')->nullable();
            $table->string('selling_price');
            $table->string('discount_price')->nullable();
            $table->string('product_level')->nullable();
            $table->string('product_kind')->nullable();
            $table->string('product_matter')->nullable();
            $table->integer('product_countpage')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('leaves_one')->nullable();
            $table->string('leaves_two')->nullable();
            $table->string('leaves_three')->nullable();
            $table->integer('status')->nullable();
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
