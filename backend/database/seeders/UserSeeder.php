<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Branch;
use App\Models\User;
use App\Models\UserProfile;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$profile = UserProfile::create([
			'type'			=> UserProfile::TYPE_FIXED,
			'name'			=> 'Administrador',
			'description'	=> 'Administrador geral da ferramenta',
			'permissions'	=> array_keys(config('permissions'))
		]);

		$user = User::create([
			'profile_id'	=> $profile->id,
			'name'			=> 'Mello Admin',
			'username'		=> 'mello',
			'password'		=> Hash::make('123456'),
		]);

		$branch = Branch::find(1);

		$user->branches()->sync($branch->id);
	}
}
