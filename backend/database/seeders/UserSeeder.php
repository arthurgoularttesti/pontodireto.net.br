<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\UserProfile;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$admin = UserProfile::create([
			'type'			=> UserProfile::TYPE_FIXED,
			'name'			=> 'Administrador',
			'description'	=> 'Administrador geral da ferramenta',
			'permissions'	=> array_keys(config('permissions'))
		]);

		User::insert([
			[
				'profile_id'	=> $admin->id,
				'name'			=> 'Mercado & Distribuidora Mello',
				'username'		=> 'melo',
				'password'		=> Hash::make('123456'),
			],
		]);
	}
}
