<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
* 
*/
class AdminController extends Controller
{
	
	public function getLogin()
	{
		return view('admin.login');
	}

	public function getDashboard()
	{
		return view('admin.dashboard');
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'password' => 'required'
			]);

		if (!Auth::attempt(['name' => $request['name'], 'password' => $request['password']])) {
			return redirect()->back()->with(['fail' => 'Could not log you in!']);
		}
		return redirect()->route('admin.dashboard');

	}
}