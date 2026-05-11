<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
	
	public function index (Request $request)
	{
		return view('_template.page_list', [
			'title'			=> 'Lista de Produtos',
			'description'	=> 'Gerencie seus níveis de estoque e automatize o processo de compras.',
			'data'			=> Client::paginate(50),
			'columns'		=> [
				(object) ['label'=>'Nome do Cliente', 'parser'=>function ($row) {return $row->name_html;}],
				(object) ['label'=>'Status', 'parser'=>function ($row) {return $row->status_html;}],
				(object) ['label'=>'Documento', 'parser'=>function ($row) {return $row->document;}],
				(object) ['label'=>'Telefone', 'parser'=>function ($row) {return $row->phone_html;}],
				(object) ['label'=>'Saldo Caderneta', 'parser'=>function ($row) {return $row->currency_html;}],
			],
			// 'filters'		=> [1],
			'actions'			=> [
				(object) ['type'=>'button', 'label'=>'Adicionar Cliente', 'icon'=>'add', 'route'=>'client.create'],
			],
		]);
	}

	public function create (Request $request)
	{

	}

	public function edit (Request $request)
	{

	}

	public function _edit (Request $request, Client $product)
	{

	}
}
