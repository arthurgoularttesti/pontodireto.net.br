<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\UserProfile;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$admin = UserProfile::create(['type'=> UserProfile::TYPE_FIXED, 'name'=>'Administrador', 'permissions'=>array_keys(config('permissions'))]);

		User::insert([
			['profile_id'=>$admin->id, 'name'=>'Mercado & Distribuidora Mello', 'description'=>'Administrador geral da ferramenta', 'username'=>'melo', 'password'=>'123456'],
		]);
	}
}
