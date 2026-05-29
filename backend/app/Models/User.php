<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Branch;
use App\Models\UserProfile;

#[Fillable(['profile_id', 'name', 'email', 'password'])]
#[Hidden(['profile_id', 'password', 'remember_token'])]
#[Table('users')]
class User extends Authenticatable
{
	protected $with			= ['profile', 'branches'];

	public function CheckPermission (string|array $permissions) : bool
	{
		if (!is_array($permissions))
			$permissions = [$permissions];

		foreach ($permissions as $permission)
		{
			if (in_array($permission, $this->profile->permissions))
				return true;
		}

		return false;
	}

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

	public function Branches () : BelongsToMany
	{
		return $this->belongsToMany(Branch::class, 'branches_users', 'user_id', 'branch_id');
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
