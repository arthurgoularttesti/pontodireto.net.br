<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Appends;

use App\Models\Product;

#[Fillable(['product_id','status','name','sku','image','mesure_weight','mesure_width_x','mesure_width_y','mesure_width_z','discount'])]
#[Hidden(['product_id'])]
#[Appends([])]
#[Table('products_volumes')]
class ProductVolume extends Model
{
	const STATUS_ACTIVE			= 1;
	const STATUS_INACTIVE		= 2;

	public static $statuses		= [
		self::STATUS_ACTIVE			=> 'Ativo',
		self::STATUS_INACTIVE		=> 'Inativo',
	];

	public function scopeFromProduct($query, Product $product)
	{
		return $query->where('product_id', $product->id);
	}
}
