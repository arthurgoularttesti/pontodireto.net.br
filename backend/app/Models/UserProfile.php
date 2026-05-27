<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;

#[Fillable(['name', 'permissions'])]
#[Hidden([])]
#[Table('users_profiles')]
class UserProfile extends Model
{
	const TYPE_FIXED			= 1;
	const TYPE_NORMAL			= 2;

	protected function casts(): array
	{
		return [
			'permissions' => 'object',
		];
	}
}
