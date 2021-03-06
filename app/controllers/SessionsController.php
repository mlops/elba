<?php
namespace App\Controllers;
class SessionsController extends \BaseController {


	public function create()
	{
		return View::make('sessions.create');
	}


	public function store()
	{
		//pega os dados
		$input = Input::all();
		
		//valida e attempt = tentativa'
		$attempt = Auth::attempt([

			'email' => $input['email'],
			'password' => $input['password']

						]);
//se for validados verdadeiros os dados de cadastro
		if ($attempt) return Redirect::intended('/')->with('flash_message', 'You have been logged it');
//se n  o for validados verdadeiros os dados de cadastro
		return Redirect::back()->with('flash_message', 'Invalid credentials');

	}


	public function destroy()
	{
		Auth::logout();

		// return Redirect::home()->with('flash_message', 'you have LOGGetUT!!');
		 return Redirect::to('/')->with('flash_message', 'you have LOGGetUT!!');;
	}

}