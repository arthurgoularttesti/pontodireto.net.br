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
		Schema::create('products_categories', function (Blueprint $table) {

			$table->id();
			$table->tinyInteger('status')->unsigned()->nullable();
			$table->string('name')->nullable();
			$table->string('icon')->nullable();
			$table->string('color')->nullable();

			$table->timestamps();
			$table->softDeletes();
		
		});
		
		Schema::create('products', function (Blueprint $table) {

			$table->id();
			$table->bigInteger('category_id')->unsigned();
			$table->tinyInteger('status')->unsigned()->nullable();
			$table->string('name')->nullable();
			$table->string('sku', 64)->nullable();
			$table->string('image')->nullable();
			$table->decimal('price')->default(0);
			$table->float('margin')->default(0);
			$table->decimal('stock_critical')->nullable();
			$table->decimal('stock_minimal')->nullable();
			$table->decimal('stock_max')->nullable();

			$table->timestamps();
			$table->softDeletes();

			$table->foreign('category_id')->references('id')->on('products_categories');
		
		});

		Schema::create('products_volumes', function (Blueprint $table) {

			$table->id();
			$table->bigInteger('product_id')->unsigned();
			$table->tinyInteger('status')->unsigned()->nullable();
			$table->string('name')->nullable();
			$table->string('sku', 64)->nullable();
			$table->string('image')->nullable();
			$table->float('mesure_weight')->default(0);
			$table->float('mesure_width_x')->default(0);
			$table->float('mesure_width_y')->default(0);
			$table->float('mesure_width_z')->default(0);
			$table->float('discount')->default(0);

			$table->timestamps();
			$table->softDeletes();

			$table->foreign('product_id')->references('id')->on('products');
		
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('products_volumes');
		Schema::dropIfExists('products');
		Schema::dropIfExists('products_categories');
	}
};
