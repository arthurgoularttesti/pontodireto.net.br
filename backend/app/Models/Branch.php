<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Appends;

#[Fillable(['status','label','name','document','registration_state','address_zip','address_street','address_city','address_state','phone','email'])]
#[Hidden([])]
#[Appends([])]
#[Table('branches')]
class Branch extends Model
{
	const STATUS_ACTIVE			= 1;
	const STATUS_INACTIVE		= 2;
	
	public static $statuses		= [
		self::STATUS_ACTIVE			=> 'Ativo',
		self::STATUS_INACTIVE		=> 'Inativo',
	];
}
