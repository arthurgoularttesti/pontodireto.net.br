<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductVolume;

class ProductSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$category1 = ProductCategory::create(['status'=>ProductCategory::STATUS_ACTIVE, 'name'=>'Bebidas','icon'=>'liquor','background'=>'#ea580c','color'=>'#ffffff']);
		$category2 = ProductCategory::create(['status'=>ProductCategory::STATUS_ACTIVE, 'name'=>'Petiscos','icon'=>'fastfood','background'=>'#1e3a8a','color'=>'#ffffff']);
		$category3 = ProductCategory::create(['status'=>ProductCategory::STATUS_ACTIVE, 'name'=>'Confeitaria','icon'=>'cake','background'=>'#db2777','color'=>'#ffffff']);
		$category4 = ProductCategory::create(['status'=>ProductCategory::STATUS_ACTIVE, 'name'=>'Mercearia','icon'=>'shopping_basket','background'=>'#475569','color'=>'#FFFFFF']);

		$product1 = Product::create([
			'category_id'		=> $category1->id,
			'status'			=> Product::STATUS_ACTIVE,
			'name'				=> 'Heineken Premium Lager 330ml',
			'sku'				=> 'HEI-001-LGR',
			'image'				=> null,
			'price'				=> 6.5,
			'margin'			=> 30,
			'criticalstock'		=> 10,
		]);

		$product2 = Product::create([
			'category_id'		=> $category1->id,
			'status'			=> Product::STATUS_ACTIVE,
			'name'				=> 'Coca-Cola Classic 2L',
			'sku'				=> 'CC-CLA-2L0',
			'image'				=> null,
			'price'				=> 6.5,
			'margin'			=> 30,
			'criticalstock'		=> 10,
		]);

		$product3 = Product::create([
			'category_id'		=> $category1->id,
			'status'			=> Product::STATUS_ACTIVE,
			'name'				=> 'Brahma Chopp 600ml',
			'sku'				=> 'BR-CHP-600',
			'image'				=> null,
			'price'				=> 6.5,
			'margin'			=> 30,
			'criticalstock'		=> 10,
		]);

		$product4 = Product::create([
			'category_id'		=> $category4->id,
			'status'			=> Product::STATUS_ACTIVE,
			'name'				=> 'BISC RECH PASSATEMPO PCT 150G CHOCOLATE',
			'sku'				=> 'BISC-RECH-150',
			'image'				=> null,
			'price'				=> 3.2,
			'margin'			=> 30,
			'criticalstock'		=> 10,
		]);

		$product5 = Product::create([
			'category_id'		=> $category3->id,
			'status'			=> Product::STATUS_ACTIVE,
			'name'				=> 'CREAM CHEESE PHILADELPHIA 150G LIGHT',
			'sku'				=> 'CREAM-CHEESE',
			'image'				=> null,
			'price'				=> 3.2,
			'margin'			=> 30,
			'criticalstock'		=> 10,
		]);

		$product6 = Product::create([
			'category_id'		=> $category2->id,
			'status'			=> Product::STATUS_ACTIVE,
			'name'				=> 'SALG MILHO CHEETOS LUA PCT 140G PARMESAO',
			'sku'				=> 'CHEET-PARM',
			'image'				=> null,
			'price'				=> 3.2,
			'margin'			=> 30,
			'criticalstock'		=> 10,
		]);

		ProductVolume::insert([
			['product_id'=>$product1->id,'status'=>ProductVolume::STATUS_ACTIVE,'name'=>'Engradado','amount'=>12, 'sku'=>null,'image'=>null,'mesure_weight'=>0,'mesure_width_x'=>0,'mesure_width_y'=>0,'mesure_width_z'=>0,'discount'=>0],
			['product_id'=>$product2->id,'status'=>ProductVolume::STATUS_ACTIVE,'name'=>'Engradado','amount'=>12, 'sku'=>null,'image'=>null,'mesure_weight'=>0,'mesure_width_x'=>0,'mesure_width_y'=>0,'mesure_width_z'=>0,'discount'=>0],
			['product_id'=>$product3->id,'status'=>ProductVolume::STATUS_ACTIVE,'name'=>'Engradado','amount'=>12, 'sku'=>null,'image'=>null,'mesure_weight'=>0,'mesure_width_x'=>0,'mesure_width_y'=>0,'mesure_width_z'=>0,'discount'=>0],
			['product_id'=>$product4->id,'status'=>ProductVolume::STATUS_ACTIVE,'name'=>'Caixa','amount'=>24, 'sku'=>null,'image'=>null,'mesure_weight'=>0,'mesure_width_x'=>0,'mesure_width_y'=>0,'mesure_width_z'=>0,'discount'=>0],
			['product_id'=>$product5->id,'status'=>ProductVolume::STATUS_ACTIVE,'name'=>'Caixa','amount'=>12, 'sku'=>null,'image'=>null,'mesure_weight'=>0,'mesure_width_x'=>0,'mesure_width_y'=>0,'mesure_width_z'=>0,'discount'=>0],
			['product_id'=>$product6->id,'status'=>ProductVolume::STATUS_ACTIVE,'name'=>'Caixa','amount'=>24, 'sku'=>null,'image'=>null,'mesure_weight'=>0,'mesure_width_x'=>0,'mesure_width_y'=>0,'mesure_width_z'=>0,'discount'=>0],
		]);
	}
}
