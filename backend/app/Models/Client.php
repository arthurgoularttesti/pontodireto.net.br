<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Appends;

#[Fillable(['status', 'name', 'document', 'phone', 'credits'])]
#[Hidden([])]
#[Appends(['acronym'])]
#[Table('clients')]
class Client extends Model
{
	const STATUS_ACTIVE			= 1;
	const STATUS_INACTIVE		= 2;

	public static $statuses		= [
		self::STATUS_ACTIVE			=> 'Ativo',
		self::STATUS_INACTIVE		=> 'Inativo',
	];

	protected function acronym(): Attribute
	{
		return Attribute::make(
			get: function () {
			
				if (empty($this->name))
					return '';

				$nameArray = explode(' ', $this->name);

				if (count($nameArray) == 1)
					return substr($this->name, 0, 2);

				return substr($nameArray[0], 0, 1) . substr($nameArray[count($nameArray) - 1], 0, 1);
			},
		);
	}
}
