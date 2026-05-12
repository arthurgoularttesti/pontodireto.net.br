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
		$category1 = ProductCategory::create(['status'=>ProductCategory::STATUS_ACTIVE, 'name'=>'Bebidas','icon'=>'local_bar','color'=>'#ea580c']);
		$category2 = ProductCategory::create(['status'=>ProductCategory::STATUS_ACTIVE, 'name'=>'Petiscos','icon'=>'fastfood','color'=>'#1e3a8a']);
		$category3 = ProductCategory::create(['status'=>ProductCategory::STATUS_ACTIVE, 'name'=>'Confeitaria','icon'=>'cake','color'=>'#db2777']);
		$category4 = ProductCategory::create(['status'=>ProductCategory::STATUS_ACTIVE, 'name'=>'Mercearia','icon'=>'shopping_basket','color'=>'#475569']);

		$product1 = Product::create([
			'category_id'		=> $category1->id,
			'status'			=> Product::STATUS_ACTIVE,
			'name'				=> 'Heineken Premium Lager 330ml',
			'sku'				=> 'HEI-001-LGR',
			'image'				=> null,
			'price'				=> 6.5,
			'margin'			=> 30,
			'stock_critical'	=> 50,
			'stock_minimal'		=> 100,
			'stock_max'			=> 1500,
		]);

		$product2 = Product::create([
			'category_id'		=> $category1->id,
			'status'			=> Product::STATUS_ACTIVE,
			'name'				=> 'Coca-Cola Classic 2L',
			'sku'				=> 'CC-CLA-2L0',
			'image'				=> null,
			'price'				=> 6.5,
			'margin'			=> 30,
			'stock_critical'	=> 50,
			'stock_minimal'		=> 100,
			'stock_max'			=> 1500,
		]);

		$product3 = Product::create([
			'category_id'		=> $category1->id,
			'status'			=> Product::STATUS_ACTIVE,
			'name'				=> 'Brahma Chopp 600ml',
			'sku'				=> 'BR-CHP-600',
			'image'				=> null,
			'price'				=> 6.5,
			'margin'			=> 30,
			'stock_critical'	=> 50,
			'stock_minimal'		=> 100,
			'stock_max'			=> 1500,
		]);

		ProductVolume::insert([
			['product_id'=>$product1->id,'status'=>ProductVolume::STATUS_ACTIVE,'name'=>'Caixa','sku'=>null,'image'=>null,'mesure_weight'=>0,'mesure_width_x'=>0,'mesure_width_y'=>0,'mesure_width_z'=>0,'discount'=>0],
			['product_id'=>$product2->id,'status'=>ProductVolume::STATUS_ACTIVE,'name'=>'Caixa','sku'=>null,'image'=>null,'mesure_weight'=>0,'mesure_width_x'=>0,'mesure_width_y'=>0,'mesure_width_z'=>0,'discount'=>0],
			['product_id'=>$product3->id,'status'=>ProductVolume::STATUS_ACTIVE,'name'=>'Caixa','sku'=>null,'image'=>null,'mesure_weight'=>0,'mesure_width_x'=>0,'mesure_width_y'=>0,'mesure_width_z'=>0,'discount'=>0],
		]);
	}
}
