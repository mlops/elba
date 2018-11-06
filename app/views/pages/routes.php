<?php
//header for croos origin
// header('Access-Control-Allorw-Origin: *');
// header('Access-Control-Allow-Methods: GETPOST, PATCH, PUT, DELETE, OPTIONS');
// header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token,cid');


 Route::get('susy', function()
 {

    return View::make('pages.index');

});

Route::get('/', function() {

    return View::make('pages.index2');

});

//Route::get('/', 'HomeController@index');
Route::get('biografia', 'HomeController@biografia');
// Route::get('discos', 'HomeController@discos');


Route::get('disco','DiscoController@index');
Route::get('disco/{slug}', 'DiscoController@getSlug');
Route::get('discos', 'DiscoController@getAllDiscos');
Route::get('contato', 'ContatoController@index');
Route::pattern('id', '[0-9]+');
Route::get('news/{id}', 'NewsController@show');



Route::get('phpinfo', function() {

return View::make('pages.phpinfo');

});

// Route::get('/', function()
// {
// // $participacoesExtras = Participacoes_extra::all();
// // return View::make('participacoes')->with('participacoesExtras', $participacoesExtras);
// //return Participacoes_extra::all();
// //

// $anos = Anos::find(3);
//  return View::make('participacoes')->with('anos', $anos);

// });

// Route::get('disco', function() {
// $discos = Discos::all();
// $data = array(
//     'title'  =>  "ioio",
//     'discos' => $discos
// );

// return View::make('pages.discografia1')->with($data);
// }

// Route::get('disco/{slug}', function($slug){
// var_dump($slug);
// }
// Route::get('disco/media_view01','HomeController@pages_disco1');
// Route::get('disco/media_view02','HomeController@pages_disco2');
// Route::get('disco/media_view03','HomeController@pages_disco3');
// Route::get('disco/media_view04','HomeController@pages_disco4');
// Route::get('disco/media_view05','HomeController@pages_disco5');

// Route::get('tracks','HomeController@pages_musicas');

// Route::get('social','HomeController@pages_social');

// Route::get('contato','HomeController@pages_contato');

// Route::get('agenda','HomeController@pages_agenda');

// Route::get('biografia','HomeController@pages_biografia');

// Route::get('tour','HomeController@pages_tour');

// Route::get('produtos','HomeController@pages_produtos');



//     // route to show the login form
//     Route::get('login', array('uses' => 'HomeController@showLogin'));

//     // route to process the form
//     Route::post('login', array('uses' => 'HomeController@doLogin'));

//     Route::get('logout', array('uses' => 'HomeController@doLogout'));


// ===============================================
    // 404 ===========================================
    // ===============================================
    // 
    // 
    // 
    // 

    // App::missing(function($exception)
    // {

    //     // shows an error page (app/views/error.blade.php)
    //     // returns a page not found error
    //     // return Response::view('errors/404.php', array(), 404);
    // });

    //     App::missing(function($exception)
    // {

    //     // shows an error page (app/views/error.blade.php)
    //     // returns a page not found error
    //     // return Response::view('errors/403.php', array(), 403);
    // });

    // App::missing(function($exception)
    // {

    //     // shows an error page (app/views/error.blade.php)
    //     // returns a page not found error
    //     // return Response::view('errors/500.php', array(), 500);
    // });


// Route::get('a1', function()
//  {
//      return View::make('pages.json2');
// });

// {
//     // return View::make('HomeController@pages_album');
// });
// Route::get('a1', function()
// {
//     return View::make('hello');
// });




// Route::get('/', array('as' => 'index', 'uses' => 'PostController@getIndex'));

// Route::get('/admin', array('as' => 'admin_area', 'uses' => 'PostController@getAdmin'));

// Route::post('/add', array('as' => 'add_new_post', 'uses' => 'PostController@postAdd'));

// Route::post('/login', array('as' => 'login', 'uses' => 'UserController@postLogin'));

// Route::get('/logout', array('as' => 'logout', 'uses' => 'UserController@getLogout'));
