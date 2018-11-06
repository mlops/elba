<?php 
//namespace App\Http\Controllers;

// use App\Http\Requests;
// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

//use App\Models\News as News;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index(){


		$noticias = News::orderBy('id', 'DESC')->get();
		return View::make('pages.news.allnews')->with('noticias', $noticias);


}

	// public function getSlug($slug){


	//         $discos = Discos::whereSlug($slug)->get();



	public function create()
	{
		return View::make('pages.adm.addnews');
	}


	public function store()
	{
		//
	}


	public function show($id, $slug = null)
	{
		 $noticias = News::where('id', '=', $id)->get();
		 return View::make('pages.news.news')->with('news', $noticias);

	}





	
	public function edit($id)
	{
		//
	}


	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	// public function showid($id)
	// {
	// 	     if ($id == 1)
	// 	    {
	// 	    	return View::make('pages.view_news1');

	// 	    }
	// 	    else if ($id == 2)
	// 	    {
	// 	    	return View::make('pages.view_news2');
	// 	}
	// 	    else if ($id == 3)
	// 	    {
	// 	    	return View::make('pages.view_news3');
	// 	}
	// 	    else if ($id == 4)
	// 	    {
	// 	    	return View::make('pages.view_news4');
	// 	}
	// 	    else if ($id == 5)
	// 	    {
	// 	    	return View::make('pages.view_news5');
	// 	}
	// 	    else if ($id == 6)
	// 	    {
	// 	    	return View::make('pages.view_news6');
	// 	}
	// 	    else if ($id == 7)
	// 	    {
	// 	    	return View::make('pages.view_news7');
	// 	}
	// 	    else if ($id == 8)
	// 	    {
	// 	    	return View::make('pages.view_news8');
	// 	}
	// 	    else if ($id == 9)
	// 	    {
	// 	    	return View::make('pages.view_news9');
	// 	}
	// }

}
