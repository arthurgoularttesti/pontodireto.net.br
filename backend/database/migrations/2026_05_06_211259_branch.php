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
		Schema::create('branches', function (Blueprint $table) {

			$table->id();
			$table->tinyInteger('status')->unsigned()->nullable();
			$table->string('label')->nullable();
			$table->string('name')->nullable();
			$table->string('document', 32)->nullable();
			$table->string('registration_state', 32)->nullable();
			$table->string('address_zip')->nullable();
			$table->string('address_street')->nullable();
			$table->string('address_city')->nullable();
			$table->string('address_state')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->nullable();

			$table->timestamps();
			$table->softDeletes();
		
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('branches');
	}
};
