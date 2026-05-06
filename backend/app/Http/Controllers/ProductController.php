<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
	public function index (Request $request)
	{
		return view('product_list', [
			'title'			=> 'Lista de Produtos',
			'description'	=> 'Gerencie seus níveis de estoque e automatize o processo de compras.',
		]);
	}

	public function create (Request $request)
	{

	}

	public function edit (Request $request)
	{

	}

	public function _edit (Request $request, Product $product)
	{

	}

	public function volume (Request $request)
	{

	}
}
