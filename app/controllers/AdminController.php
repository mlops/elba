<?php

class AdminController extends BaseController {




	function __construct()
	{
		if (! Session::has('admin')) { //se naõ tiver seesion com valor admin
			Redirect::to('login')->send();
		}

	}


	public function getLogout()
		{
			Session::forget('admin');
			
			return Redirect::to('login');
		}


	public function getIndex()
		{
			return View::make('admin.index');
		}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getPages()
		{
			$pages = DB::table('pages')->orderBy('sorting', 'asc')->get();

			return View::make('admin.pages_index')->with('pages', $pages);
		}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getAddPage()
		{
			return View::make('admin.pages_add');
		}


/**
 *
 * @return  Redirect
 */
		
	public function postAddPage()
		{
			$rules = array(
				'title' => 'required|min:2|unique:pages',
				'slug' => 'min:2|unique:pages',
				'body' => 'required|min:5'
				);



			$title = Input::get('title');
			$slug = str_replace(' ', '-', Input::get('slug'));
			if ($slug == '') {
				$title2 = strtolower($title);
				$title2 = str_replace(' ', '-', $title2);
				$slug = $title2;

			}
			$body = Input::get('body');
			$sidebar = Input::get('sidebar');

			$validator = Validator::make(array(
				'title' => $title,
				'slug'  => $slug,
				'body' => $body

				), $rules);
			$slug == 'home' ? $sorting = 0 : $sorting =9999;

			if ($validator->passes())
			{
				DB::table('pages')->insert(
					array('title' => $title, 'slug' => $slug, 'body' => $body, 'sidebar' => $sidebar, 'sorting' => $sorting));

				return Redirect::to('admin/add-page')->with('s_msg', 'Page Created');

			}
			return Redirect::to('admin/add-page')
						->with('e_msg', 'Something went wrong!')
						->withErrors($validator)
						->withInput();

		}

/**
 *
 * @return  View
 */

	public function getEditPage($id)
	{
		$pageInfo = DB::table('pages')->where('id', '=', $id)->first();
		return View::make('admin.pages_edit')->with('pageInfo', $pageInfo);
	}

 
	/**
	 *Post the dit page form
	 * @return  redirect
	 */

	public function postEditPage()
	{

		$title = Input::get('title');

		$slug = str_replace(' ', '-', Input::get('slug'));
		if ($slug == '') {
			$title2 = strtolower($title);
			$title2 = str_replace(' ', '-', $title2);
			$slug = $title2;

		}

		$body = Input::get('body');

		$sidebar = Input::get('sidebar');

		$id = Input::get('id');

		$rules = array(
			'title' => 'required|min:2|unique:pages,title,'.$id,
			'slug' => 'min:2|unique:pages,slug,'.$id,
			'body' => 'required|min:5'
			);

		$validator = Validator::make(array(
			'title' => $title,
			'slug'  => $slug,
			'body' => $body

			), $rules);

		if ($validator->passes())
		{
			DB::table('pages')
				->where('id', $id)
				->update(array('title' => $title, 'slug' => $slug, 'body' => $body, 'sidebar' => $sidebar)
			);

			return Redirect::to('admin/edit-page/'.$id)->with('s_msg', 'Page Edit!');

		}
		return Redirect::to('admin/edit-page'.$id)
					->with('e_msg', 'Something went wrong!')
					->withErrors($validator);


	}


	/**
	 *Delete the page
	 * @return  redirect
	 */

	public function getDeletePage($id)
	{
		DB::table('pages')->where('id', '=', $id)->delete();

		return Redirect::to('admin/pages')->with('s_msg', 'Page Deleted!');

	}



	/**
	 *reorder pages sorting ajax call
	 * @return  void
	 */

	public function postReorderPages()
		{
			$getids = Input::get('id');

			$count = 1;

			foreach ($getids as $id) {
				DB::table('pages')->where('id', $id)->update(array('sorting' => $count));

				$count++;

			}

		}
	/**
	 *Display sidebar view
	 * @return  view
	 */

	public function getSidebar()
	{
		$sidebarText = DB::table('sidebar')->where('id', 1)->pluck('body');
		return View::make('admin.sidebar')->with('sidebarText', $sidebarText);

	}



	/**
	 *Edit the sidebar
	 * @return  redirect
	 */

	public function postEditSidebar()
	{
		$sidebarText = Input::get('body');

		DB::table('sidebar')->where('id', 1)->update(array('body' => $sidebarText));

		return Redirect::to ('admin/sidebar')->with('sidebarText', $sidebarText)->with('s_msg', 'Sidebar Edited!');

	}



	/**
	 *Display galery view
	 * @return  view
	 */

	public function getGallery()
	{

		$uploadsDir = public_path()."/uploads/thumbs";
		$images = Helper::listImages($uploadsDir);
		return View::make('admin.gallery')->with('images', $images);

	}



	/**
	 *Upload images
	 * @return  void
	 */

	public function postUpload()
	{
		Upload::doUpload();
		

	}


	/**
	 *Display gallery ajax call
	 * @return  void
	 */

	public function postGalleryAjax()
	{
		$uploadsDir = public_path()."/uploads/thumbs";
		$images = Helper::listImages($uploadsDir);
		return View::make('admin.galleryajax')->with('images', $images);
		


	}


	/**
	 *Delete Image
	 * @return  void
	 */

	public function postDeleteImage()
	{
		$image = Input::get('image');
		$uploadsDir = public_path()."/uploads/";
		$uploadsDirThumbs = public_path()."/uploads/thumbs/";

		Helper::deleteImage($image, $uploadsDir, $uploadsDirThumbs);
		//return View::make('admin.galleryajax')->with('images', $images);
		


	}




}