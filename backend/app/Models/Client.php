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

	protected function acronym() : Attribute
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

	protected function nameHtml() : Attribute
	{
		return Attribute::make(function () {
			return '<div class="flex items-center gap-3"><div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-900 font-bold">' . $this->acronym . '</div><div class="font-semibold text-primary">' . $this->name . '</div></div>';
		});
	}

	protected function statusString() : Attribute
	{
		return Attribute::make(
			get: fn () => self::$statuses[$this->status],
		);
	}

	protected function statusHtml() : Attribute
	{
		return Attribute::make(
			get: function () {

				$class = 'bg-slate-200';

				switch ($this->status)
				{
					case self::STATUS_ACTIVE:

						$class = 'bg-green-100 text-green-700';
						break;

					case self::STATUS_INACTIVE:

						$class = 'bg-secondary-fixed text-on-secondary-fixed-variant';
						break;
				}
				
				return '<span class="px-3 py-1 text-xs font-bold rounded-full uppercase tracking-tighter ' . $class . '">' . $this->status_string . '</span>';
			},
		);
	}

	protected function phoneHtml() : Attribute
	{
		return Attribute::make(
			get: function () {

				if (empty($this->phone))
					return '<span class="text-outline-variant" style="text-decoration: line-through;">Não Informado</span>';

				return $this->phone;
			},
		);
	}

	protected function currencyString() : Attribute
	{
		return Attribute::make(
			get: function () {

				return 'R$ '. number_format($this->currency, 2, ',', '.');
			},
		);
	}

	protected function currencyHtml() : Attribute
	{
		return Attribute::make(
			get: function () {

				$class = 'bg-slate-200';

				if ($this->currency > 0)
				{
					$class = 'bg-green-100 text-green-700';
				}
				elseif ($this->currency < 0)
				{
					$class = 'bg-secondary-fixed text-on-secondary-fixed-variant';
				}
				
				return '<span class="px-3 py-1 text-xs font-bold rounded-full uppercase tracking-tighter ' . $class . '">' . $this->currency_string . '</span>';
			},
		);
	}
}
