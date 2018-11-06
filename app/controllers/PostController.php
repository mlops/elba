<?php

class PostController extends Controller {


	
	public function getIndex()
	{
		$posts = News::with('Author')->orderBy('id', 'DESC')->paginate(5);
		return View::make('pages.adm.index')->with('posts', $posts);
	}



	public function getAdmin()
	{
		
		return View::make('pages.adm.addpost');
	}

	public function postAdd()
	{
		News::create(array(
			'slug' => Input::get('slug'),
			'title' => Input::get('title'),
			'article' => Input::get('article'),
			'img' => Input::get('img'),
			'fonte' => Input::get('fonte'),
			'author_id' => Auth::user()->id
			));
		return Redirect::route('index');
	}


	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
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


}
