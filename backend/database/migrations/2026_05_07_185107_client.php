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
		Schema::create('clients', function (Blueprint $table) {

			$table->id();
			$table->tinyInteger('status')->unsigned()->nullable();
			$table->string('name')->nullable();
			$table->string('document', 20)->nullable();
			$table->decimal('currency')->default(0);

			$table->timestamps();
			$table->softDeletes();
		
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('clients');
	}
};
