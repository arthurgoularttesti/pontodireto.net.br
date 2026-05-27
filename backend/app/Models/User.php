<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\UserProfile;

#[Fillable(['profile_id', 'name', 'email', 'password'])]
#[Hidden(['profile_id', 'password', 'remember_token'])]
#[Table('users')]
class User extends Authenticatable
{
	protected $with			= ['profile'];

	public function CheckPassword (string $password) : bool
	{
		if (is_null($this->password))
			return true;

		return Hash::check($password, $this->password);
	}

	/**
	 * Global Methods
	 */

	protected function casts(): array
	{
		return [
			// 'email_verified_at' => 'datetime',
			// 'password' => 'hashed',
		];
	}

	public function Profile () : BelongsTo
	{
		return $this->belongsTo(UserProfile::class);
	}

	protected function scopeFindByUsername ($query, ?string $username)
	{
		return $query->where('username', $username);
	}

	protected function scopeFindByLogin ($query, ?string $username, ?string $password)
	{
		dd(Hash::make($password));

		return $query->where('username', $username)->where('password', Hash::make($password));
	}
}
