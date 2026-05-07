<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
	
	public function index (Request $request)
	{
		return Client::all();

		return view('client_list', [
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

	public function _edit (Request $request, Client $product)
	{

	}
}
