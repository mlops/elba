<?php

class PagesController extends BaseController {

	/**
	 * Controll all pages
	 * GET /pages
	 *
	 * @return redirect or view
	 */
	public function getIndex($slug = '')
	{
		 $slug == '' ? $pageslug = 'home' : $pageslug = $slug;
		
		$specialPage = '';
		$with = [];

		$pageRow = DB::table('pages')->where('slug', $pageslug)->first();

		if(empty($pageRow)) {
			return Redirect::to('/');
		}

		$with['pageRow'] = $pageRow;

		if ($pageRow->sidebar == 'yes') {
			$sidebarText = DB::table('sidebar')->where('id', 1)->pluck('body');

			$with['sidebarText'] = $sidebarText;
		}

		if($pageslug == 'gallery') {
			$specialPage = 'gallery';
			$uploadsDir = public_path().'/uploads/thumbs';
			$images = Helper::listImages($uploadsDir);

			$with['specialPage'] = $specialPage;
			$with['images'] = $images;
		} else {
			$with['specialPage'] = $specialPage;
		}

		return View::make('pages.index')->with($with);
		

	  }


}
