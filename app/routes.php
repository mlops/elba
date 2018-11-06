<?php


Route::pattern('id', '[0-9]+');




//teste de helpers
Route::get('helper', function () {
return special_ucwords('fabyo guimarães de oliveira');

//Fabyo Guimarães de Oliveira
}); 


Route::get('/', 'IndexController@index');


// Route::get('json', 'IndexController@json');

Route::resource('participacoes', 'ParticipacoesController', ['as' => 'index']);

Route::get('disco/{id}/{slug?}','DiscoController@show');
// Route::get('news/edit/{id}', ['as' => 'news.edit', 'uses' => 'NewsController@edit']);
Route::resource('discos', 'DiscoController', ['except' => ['show', 'edit']]);


Route::get('dvd/{id}/{slug?}','DvdController@show');
// Route::get('news/edit/{id}', ['as' => 'news.edit', 'uses' => 'NewsController@edit']);
Route::resource('dvds', 'DvdController', ['except' => ['show', 'edit']]);

Route::get('midias', function()
{
    return View::make('pages.midias');
});
Route::get('singles', 'SinglesController@index');
Route::get('contato', 'ContatoController@index');
Route::get('biografia', 'HomeController@biografia');




Route::get('news/{id}/{slug?}','NewsController@show');
// Route::get('news/edit/{id}', ['as' => 'news.edit', 'uses' => 'NewsController@edit']);
Route::resource('news', 'NewsController', ['except' => ['show', 'edit']]);

Route::resource('albuns', 'AlbumController');
