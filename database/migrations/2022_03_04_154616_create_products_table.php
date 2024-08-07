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
            $table->string('title_english')->unique();
            $table->string('title_persian')->unique();
            $table->text('short_description')->nullable();
            $table->text('full_description')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->string('seo_desc')->nullable();
            $table->boolean('status')->nullable();
            $table->string('sku')->nullable();
            $table->decimal('weight',10,2)->nullable();
            $table->decimal('length',10,1)->comment('cm unit')->nullable();

            $table->decimal('width',10,1)->nullable();
            $table->decimal('height',10,1)->nullable();

            $table->string('origin_price')->nullable();
            $table->tinyInteger('marketable')->nullable();

            $table->string('tags')->nullable();
            $table->bigInteger('views')->nullable();
            $table->double('available_in_stock')->nullable();
            $table->integer('number_sold')->nullable();
            $table->integer('frozen_number')->nullable();
            $table->integer('salable_quantity')->nullable();

            $table->timestamp('published_at')->nullable();
            $table->unsignedBigInteger('category_attribute_id')->nullable();

            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');

            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');


            $table->index(['title_persian', 'title_english']);

            $table->softDeletes();
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
