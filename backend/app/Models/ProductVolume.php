<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Appends;

#[Fillable(['product_id','status','name','sku','image','mesure_weight','mesure_width_x','mesure_width_y','mesure_width_z','discount'])]
#[Hidden(['product_id'])]
#[Appends([])]
#[Table('products_volumes')]
class ProductVolume extends Model
{
	//
}
