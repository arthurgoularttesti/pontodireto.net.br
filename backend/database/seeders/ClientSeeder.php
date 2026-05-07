<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Client;

class ClientSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		Client::insert([
			['status'=>Client::STATUS_ACTIVE, 'name'=>'Ricardo Ferreira', 'document'=>'123.456.789-00', 'currency'=>rand(0, 100000)/100],
			['status'=>Client::STATUS_ACTIVE, 'name'=>'Maria Oliveira Alcantara', 'document'=>'456.789.012-11', 'currency'=>rand(0, 100000)/100],
			['status'=>Client::STATUS_ACTIVE, 'name'=>'João Santos Lima', 'document'=>'789.012.345-22', 'currency'=>rand(0, 100000)/100],
			['status'=>Client::STATUS_ACTIVE, 'name'=>'Ana Carolina Souza', 'document'=>'012.345.678-33', 'currency'=>rand(0, 100000)/100],
		]);
	}
}
