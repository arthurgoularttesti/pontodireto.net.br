<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Branch;

class BranchSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		Branch::insert([
			['status'=>Branch::STATUS_ACTIVE,'label'=>'Pavuna','name'=>null,'document'=>null,'registration_state'=>null,'address_zip'=>null,'address_street'=>null,'address_city'=>null,'address_state'=>null,'phone'=>null,'email'=>null],
			['status'=>Branch::STATUS_ACTIVE,'label'=>'Porto Velho','name'=>null,'document'=>null,'registration_state'=>null,'address_zip'=>null,'address_street'=>null,'address_city'=>null,'address_state'=>null,'phone'=>null,'email'=>null],
		]);
	}
}
