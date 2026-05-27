<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\Logs\Product as Log;

class ProductObserver
{
	/**
	 * Handle the Product "created" event.
	 */
	public function created(Product $product): void
	{
		Log::FromEntity($product, Log::TYPE_INSERT);
	}

	/**
	 * Handle the Product "updated" event.
	 */
	public function updated(Product $product): void
	{
		Log::FromEntity($product, Log::TYPE_UPDATE);
	}

	/**
	 * Handle the Product "deleted" event.
	 */
	public function deleted(Product $product): void
	{
		Log::FromEntity($product, Log::TYPE_DELETE);
	}

	/**
	 * Handle the Product "restored" event.
	 */
	public function restored(Product $product): void
	{
		Log::FromEntity($product, Log::TYPE_RESTORED);
	}
}
