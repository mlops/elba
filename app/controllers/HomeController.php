<?php 

class HomeController extends Controller {



	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->some_data ="#Elba Ramalho //////";
		// $this->middleware('auth');
	}

	// public function showLogin() {
	// 	return View::make('pages.adm.login');

	// }


	// public function doLogin() {
	// 	// process the form
	// 	// validate the info, create rules for the inputs
	// 	$rules = array(
	// 	    'email'    => 'required|email', // make sure the email is an actual email
	// 	    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
	// 	);

	// 	// run the validation rules on the inputs from the form
	// 	$validator = Validator::make(Input::all(), $rules);

	// 	// if the validator fails, redirect back to the form
	// 	if ($validator->fails()) {
	// 	    return Redirect::to('pages.adm.login')
	// 	        ->withErrors($validator) // send back all errors to the login form
	// 	        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
	// 	} else {

	// 	    // create our user data for the authentication
	// 	    $userdata = array(
	// 	        'email'     => Input::get('email'),
	// 	        'password'  => Input::get('password')
	// 	    );

	// 	    // attempt to do the login
	// 	    if (Auth::attempt($userdata)) {

	// 	        // validation successful!
	// 	        // redirect them to the secure section or whatever
	// 	        // return Redirect::to('secure');
	// 	        // for now we'll just echo success (even though echoing in a controller is bad)
	// 	        //echo 'SUCCESS!';
	// 	       // return ('ok!');
	// 	    	//return Redirect::to('pages.adm.index');
	// 	    	return Redirect::route('add_new_post');



	// 	    } else {        

	// 	        // validation not successful, send back to form 
	// 	        return Redirect::to('pages.adm.login');

	// 	    }

	// 	}

	// }

	public function doLogout()
	{
	    Auth::logout(); // log the user out of our application
	    return Redirect::route('login'); // redirect the user to the login screen
	}









	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return 'teste rotas';
		return View::make('pages.index.index3');
		
	}

	public function biografia()
	{

		return View::make('pages.biografia.biografia');
	}

	public function discos()
	{

		return View::make('pages.discos');
	}

	//   public function action_index()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.index')->with('title', $this->some_data);
	//   }
	// // }

	//   public function pages_discografia()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.discografia')->with('title',  $this->some_data);
	//   }


	//     public function pages_social()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.social')->with('title',  $this->some_data);
	//   }

	//       public function pages_contato()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.contato')->with('title',  $this->some_data);
	//   }


	//     public function pages_agenda()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.agenda')->with('title',  $this->some_data);
	//   }


	//     public function pages_biografia()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.biografia')->with('title',  $this->some_data);
	//   }

	//       public function pages_tour()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.tour')->with('title',  $this->some_data);
	//   }

	//     public function pages_disco1()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.disco01')->with('title',  $this->some_data);
	//   }

	//       public function pages_disco2()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.disco02')->with('title',  $this->some_data);
	//   }
	//       public function pages_disco3()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.disco03')->with('title',  $this->some_data);
	//   }
	//       public function pages_disco4()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.disco04')->with('title',  $this->some_data);
	//   }
	//       public function pages_disco5()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.disco05')->with('title',  $this->some_data);
	//   }

	//         public function pages_musicas()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('pages.musicas')->with('title',  $this->some_data);
	//   }

	//           public function pages_produtos()
	//   {
	//      // $some_data = "#Elba Ramalho //////";
	//     return View::make('layouts.default3');
	//   }



	##//
		public function validate()
		{
	        // attempt to do the login
	        $auth = Auth::attempt(
	            [
	                'username'  => strtolower(Input::get('username')),
	                'password'  => Input::get('password')    
	            ]
	        );
	        if ($auth) {
	            return Redirect::to('home');
	        } else {
	            // validation not successful, send back to form 
	            return Redirect::to('/')
	                ->withInput(Input::except('password'))
	                ->with('flash_notice', 'Your username/password combination was incorrect.');
	        }

		}
		public function logout() {
			Auth::logout();
			return Redirect::to('/')
			        ->with('flash_notice', 'Você esta Logged out.');
		}

	}