<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
	public function index (Request $request)
	{
		if ($request->isMethod('post'))
		{
			$validator = Validator::make($request->all(), [
				'username'	=> ['required', 'max:255'],
				'password'	=> ['required', 'max:255'],
				'connected'	=> ['nullable'],
				'test'		=> ['required'],
			]);

			if ($validator->validated())
			{
				return 'Passou na validação';
			}

			return redirect()->route('login')->withErrors($validator);
		}

		return view('login');
	}

	public function logout ()
	{
		return redirect()->route('login');
	}
}
