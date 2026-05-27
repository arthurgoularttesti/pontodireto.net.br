<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\UserProfile;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('users_profiles', function (Blueprint $table) {

			$table->id();
			$table->tinyInteger('type')->unsigned()->default(UserProfile::TYPE_NORMAL);
			$table->string('name')->nullable();
			$table->text('description')->nullable();
			$table->json('permissions')->nullable();
			
			$table->timestamps();
			$table->softDeletes();
		
		});

		Schema::create('users', function (Blueprint $table) {

			$table->id();
			$table->bigInteger('profile_id')->unsigned();
			$table->string('name')->nullable();
			$table->string('username');
			$table->string('password')->nullable();
			$table->json('config')->nullable();
			
			$table->timestamps();
			$table->softDeletes();

			$table->unique('username');
			$table->foreign('profile_id')->references('id')->on('users_profiles');
		
		});

		// Schema::create('users_passwordtokens', function (Blueprint $table) {
		// 	$table->string('email')->primary();
		// 	$table->string('token');
		// 	$table->timestamp('created_at')->nullable();
		// 	$table->timestamp('email_verified_at')->nullable();
		// });
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		// Schema::dropIfExists('users_passwordtokens');
		Schema::dropIfExists('users');
		Schema::dropIfExists('users_profiles');
	}
};
