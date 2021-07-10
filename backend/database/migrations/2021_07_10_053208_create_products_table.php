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

            $table->string('title', 250);
            $table->string('images')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('quantity')->default(0);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->float('price');
            $table->boolean('enabled')->default(true);
            $table->boolean('featured')->default(false);
            $table->bigInteger('viewed')->default(0);

            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->float('width')->nullable();

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
