<?php

namespace App\Http\Controllers;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class LoginController extends Controller
{
	public function index (Request $request)
	{
		if ($request->isMethod('post'))
		{
			$user = User::FindByUsername($request->input('username'))->first();

			$validator = Validator::make($request->all(), [
				'username'	=> ['required', 'max:255'],
				'connected'	=> ['nullable'],
				'password'	=> ['required', 'max:255', function (string $attribute, mixed $value, Closure $fail) use ($user, $request) {

					if (is_null($user) || !$user->CheckPassword($request->input('password')))
						return $fail('Usuário ou senha incorreta');

				}],
			]);

			if (!$validator->fails())
			{
				Auth::login($user);

				return redirect()->route('dashboard');
			}

			return redirect()->route('login')->withErrors($validator);
		}

		return view('login');
	}

	public function logout ()
	{
		Auth::logout();

		return redirect()->route('login');
	}
}
