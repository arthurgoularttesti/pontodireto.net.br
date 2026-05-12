<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Appends;

#[Fillable(['status','name','icon','color'])]
#[Hidden([])]
#[Appends([])]
#[Table('products_categories')]
class ProductCategory extends Model
{
	const STATUS_ACTIVE			= 1;
	const STATUS_INACTIVE		= 2;

	public static $statuses		= [
		self::STATUS_ACTIVE			=> 'Ativo',
		self::STATUS_INACTIVE		=> 'Inativo',
	];
}
