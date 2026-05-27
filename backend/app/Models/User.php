<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;

#[Fillable(['profile_id', 'name', 'email', 'password'])]
#[Hidden(['profile_id', 'password', 'remember_token'])]
#[Table('users')]
class User extends Authenticatable
{
	/**
	 * Get the attributes that should be cast.
	 *
	 * @return array<string, string>
	 */
	protected function casts(): array
	{
		return [
			// 'email_verified_at' => 'datetime',
			'password' => 'hashed',
		];
	}
}
