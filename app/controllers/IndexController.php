<?php

use Carbon\Carbon;

class IndexController extends Controller {
	/**
	 * Display a listing of the resource.
	 * GET /index
	 *
	 * @return Response
	 */
	
	//WHERE YEAR( `data` ) >= YEAR( NOW() ) AND MONTH( `data` ) >= MONTH( NOW() )

	public function index()
	{
		 $date = Carbon::now()->format('Y/m/d');
		 // $news = News::orderBy(DB::raw('RAND()','DESC'))->take(4)->get();
		 $news = News::orderBy('id','DESC')->take(4)->get();
		 $discos = Discos::orderBy('id', 'DESC')->get();
		 $agenda = Agenda::where('startdate', '>=', $date )->orderBy('startdate', 'asc')->get();

		 $instagram = Instagram::orderBy('id', 'DESC')->take(8)->get();
		 $data = array(
		     'news'  => $news,
		     'discos'    => $discos,
		     'agenda'    => $agenda,
		     'instagram' => $instagram
		);
		return View::make('pages.index.index3')->with($data);
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /index/create
	 *
	 * @return Response
	 */
	public function json()
	{

	 $str = file_get_contents(base_path("file.json"));
     $json = json_decode($str, true);

		foreach ($json as $key => $value) {
		 	// echo $value['icon'] . '<br/>';
		 	// echo $value['data'][0]['temperatureMin'];
		 	//dd($value);
		 	//print_r($value);
		 	//var_dump($value);
   echo $value['summary'] . '<br/>'; 
   echo $value['data'][0]['temperatureMin']; // you can access your key value like this if result is array
   //echo $value->icon;
				
	}
         
       
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /index
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /index/{id}
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
	 * GET /index/{id}/edit
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
	 * PUT /index/{id}
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
	 * DELETE /index/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}