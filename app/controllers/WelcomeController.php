<?php 

namespace App\Controllers;

class WelcomeController extends Controller {



	public function __construct()
	{
		//$this->middleware('guest');

	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Foo $foo)
	{

		dd($foo->bar());
		return view('welcome');
	}

}
