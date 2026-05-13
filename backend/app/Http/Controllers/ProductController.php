<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
	public function index (Request $request)
	{
		return view('_template.page_list', [
			'title'			=> 'Lista de Produtos',
			'description'	=> 'Gerencie seus níveis de estoque e automatize o processo de compras.',
			'data'			=> Product::with(['category', 'volume'])->paginate(50),
			'columns'		=> [
				(object) ['label'=>'Detalhes do Produto', 'parser'=>function ($row) {return $row->name_html;}],
				(object) ['label'=>'Status', 'parser'=>function ($row) {return $row->status_html;}],
				(object) ['label'=>'Categoria', 'parser'=>function ($row) {return $row->category_html;}],
				(object) ['label'=>'Nível do Estoque', 'parser'=>function ($row) {return $row->stock_html;}],
				(object) ['label'=>'Preço', 'parser'=>function ($row) {return $row->price_string;}],
			],
			// 'filters'		=> [1],
			'rowActions'	=> [
				(object) ['type'=>'edit', 'route'=>'product.edit'],
			],
			'pageActions'	=> [
				(object) ['type'=>'button', 'label'=>'Adicionar Produto', 'icon'=>'add', 'route'=>'product.create'],
			],
		]);
	}

	public function create (Request $request)
	{
		return $this->_edit($request, new Product());
	}

	public function edit (Request $request, int $product)
	{
		return $this->_edit($request, Product::with(['category','volume'])->find($product));
	}

	public function _edit (Request $request, Product $product)
	{
		return view('product_edit', [
			'title'			=> $product->exists ? 'Editando ' . $product->name : 'Novo Produto',
			'description'	=> 'Altere as informações do produto',
			'data'			=> $product,
		]);
	}

	public function volume (Request $request)
	{

	}
}
