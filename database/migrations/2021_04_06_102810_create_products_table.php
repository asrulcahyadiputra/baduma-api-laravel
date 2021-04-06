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
            $table->string('sku',20)->unique();
            $table->string('name',50);
            $table->text('description')->nullable();
            $table->bigInteger('minimum_price');
            $table->bigInteger('maximum_price');
            $table->bigInteger('category_id');
            $table->string('path');
            $table->string('base_image');
            $table->boolean('disc');
            $table->float('disc_ammount')->default('0');
            $table->date('disc_start')->nullable();
            $table->date('disc_end')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
