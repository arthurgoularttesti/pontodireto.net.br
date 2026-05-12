<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Appends;

use App\Models\ProductCategory;
use App\Models\ProductVolume;

#[Fillable(['category_id','status','name','sku','image','price','margin','stock_critical','stock_minimal','stock_max'])]
#[Hidden(['category_id'])]
#[Appends([])]
#[Table('products')]
class Product extends Model
{
	const STATUS_ACTIVE			= 1;
	const STATUS_INACTIVE		= 2;

	public static $statuses		= [
		self::STATUS_ACTIVE			=> 'Ativo',
		self::STATUS_INACTIVE		=> 'Inativo',
	];

	protected function nameHtml() : Attribute
	{
		return Attribute::make(function () {

			$icon = '<div class="w-10 h-10 bg-surface rounded border border-outline-variant flex items-center justify-center"><span class="material-symbols-outlined text-primary" data-icon="liquor">liquor</span></div>';
			$name = '<div><div class="font-label-bold text-primary">' . $this->name . '</div><div class="text-xs text-on-surface-variant">SKU: ' . $this->sku . '</div></div>';

			return '<div class="flex items-center gap-3">' . $icon . $name . '</div>';
		});
	}
	
	protected function categoryHtml() : Attribute
	{
		return Attribute::make(function () {

			return '<span class="px-2 py-1 bg-surface-container text-on-primary-fixed-variant font-label-bold text-[10px] uppercase tracking-tighter border border-outline-variant" style="background-color:' . $this->category->color . '; color:#fff;">' . $this->category->name . '</span>';
		});
	}
	
	protected function stockHtml() : Attribute
	{
		return Attribute::make(function () {

			$icon = '<div class="w-10 h-10 bg-surface rounded border border-outline-variant flex items-center justify-center"><span class="material-symbols-outlined text-primary" data-icon="liquor">liquor</span></div>';
			$name = '<div><div class="font-label-bold text-primary">' . $this->name . '</div><div class="text-xs text-on-surface-variant">SKU: ' . $this->sku . '</div></div>';

			// Stock High
			// <div class="flex items-center gap-2">
			// <div class="w-24 h-1.5 bg-slate-100 rounded-full overflow-hidden">
			// <div class="w-3/4 h-full bg-green-500"></div>
			// </div>
			// <span class="font-label-bold text-xs text-green-700">142 units</span>
			// </div>

			// Stock Low
			// <div class="flex items-center gap-2">
			// <div class="w-24 h-1.5 bg-slate-100 rounded-full overflow-hidden">
			// <div class="w-3/4 h-full bg-green-500"></div>
			// </div>
			// <span class="font-label-bold text-xs text-green-700">142 units</span>
			// </div>

			// Stock Empty
			// <div class="flex items-center gap-2">
			// <div class="w-24 h-1.5 bg-slate-100 rounded-full overflow-hidden">
			// <div class="w-0.5 h-full bg-red-600"></div>
			// </div>
			// <span class="font-label-bold text-xs text-red-600">OUT OF STOCK</span>
			// </div>

			return '<div class="flex items-center gap-2">
				<div class="w-24 h-1.5 bg-slate-100 rounded-full overflow-hidden">
					<div class="w-3/4 h-full bg-green-500"></div>
				</div>
				<span class="font-label-bold text-xs text-green-700">142 units</span>
			</div>';
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

	protected function priceString() : Attribute
	{
		return Attribute::make(
			get: fn () => 'R$ '. number_format($this->price, 2, ',', '.'),
		);
	}

	public function category() : BelongsTo
	{
		return $this->belongsTo(ProductCategory::class);
	}

	public function volume () : HasMany
	{
		return $this->hasMany(ProductVolume::class);
	}
}
