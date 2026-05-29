<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
				(object) ['label'=>'Conversão de Volume', 'parser'=>function ($row) {return $row->volume_html;}],
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
		return $this->_edit($request, Product::with(['category','volume', 'log', 'stock'])->find($product));
	}

	public function _edit (Request $request, Product $product)
	{
		if ($request->isMethod('post'))
		{
			$validator = Validator::make($request->all(), [
				'category_id'		=> ['required'],
				'status'			=> ['required'],
				'name'				=> ['required'],
				'description_short'	=> ['nullable'],
				'description_long'	=> ['nullable'],
				'sku'				=> ['required'],
				'image'				=> ['nullable'],
				'price'				=> ['required'],
				// 'margin'			=> ['required'],
				// 'criticalstock'		=> ['required'],
			]);

			if (!$validator->fails())
			{
				// return ['validou', $request->all()];

				$product->name				= $request->input('name');
				$product->category_id		= $request->input('category_id');
				$product->status			= $request->input('status');
				$product->name				= $request->input('name');
				$product->description_short	= $request->input('description_short');
				$product->description_long	= $request->input('description_long');
				$product->sku				= $request->input('sku');
				// $product->image				= $request->input('image');
				$product->price				= $request->input('price');
				// $product->margin			= $request->input('margin');
				// $product->criticalstock		= $request->input('criticalstock');

				$product->save();

				return redirect()->route('product.edit', [$product->id])->with('success', $product->name . ' atualizado(a) com sucesso');
			}

			return ['não validou', $request->all()];
		}

		return view('product_edit', [
			'title'			=> $product->exists ? 'Editando: ' . $product->name : 'Novo Produto',
			'description'	=> 'Altere as informações do produto',
			'data'			=> $product,
			'categories'	=> ProductCategory::active()->get(),
			'statuses'		=> Product::$statuses,
		]);
	}

	public function volume (Request $request)
	{

	}
}
