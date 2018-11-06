<?php 



class DiscoController extends Controller {

	public $restful = true;

	private $some_data;

	    
	    public function __construct(){
	         $this->some_data ="#Elba Ramalho //////";
	    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
		public function index()
		{
			//$discos = DB::table('discos')->orderBy('id', 'DESC')->get();
			// $discos = Discos::orderBy('id', 'DESC')->get();
			// $data = array(
			//     'title'  =>  $this->some_data,
			//     'discos' => $discos
			// );

			// return View::make('pages.discos')->with($data);

			$discos = Discos::orderBy('id', 'DESC')->get();
			return View::make('pages.discos.discos')->with('discos', $discos);
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
	


	public function show($id, $slug = null)
	{
	$discos = Discos::with('Extra', 'k7')->where('id', '=', $id)->get();

	 //$discos_a = Discos::where_null('release')->get();
	 // $empty = $discos->release->is_nuu();
	//return DB::table('users')->where_null('updated_at')->get();

	foreach ($discos as $disco) {


	    if ($disco->id == 23)
	    {

	   //$musica1 = Musicas::with('Disco')->where('disco_id', '=',  $this->slugID($slug)  )->orderBy('id', 'ASC')->take(14)->get();
	   //$musica2 = Musicas::with('Disco')->where('disco_id', '=',  $this->slugID($slug)  )->orderBy('id', 'ASC')->skip(14)->take(14)->get();
	   // $total =  Musicas::with('Disco')->where('disco_id', '=', $musicasg )->take(14)->count();
	  $data = array(
	     'title'  =>  $this->some_data,
	     'discos' => $discos

	 );
	         //return View::make('pages.discoviewd')->with($data);
	         return View::make('pages.discos.discoviewd3')->with($data);

	    }
	    else

	    {

	      //$musica1 = Musicas::with('Disco')->where('disco_id', '=', $this->slugID($slug) )->orderBy('id', 'ASC')->get();
	      //$extras = Extras::with('Disco')->where('disco_id', '=', $this->slugID($slug) )->orderBy('id', 'ASC')->get();

	      $data = array(
	     'title'  =>  $this->some_data,
	     'discos' => $discos

	 );

	       //return View::make('pages.discoviews')->with($data);
	       return View::make('pages.discos.discoviews3')->with($data);
	       // $this->attributes['SALES_ORDER_NUMBER'] = (is_null($value) ? '' : $value)

	    }


	}
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

	public function getAllDiscos(){

	         $discos = Discos::all();

	        // $data = array(
	        //     'title'   => $this->some_data,
	        //     'discos'  => $discos
	        // );

	        //     return View::make('pages.media_all')->with($data);

	     foreach($discos as $data){
	            $data = array(
	            'title'   => $this->some_data,
	            'discos'  => $discos
	        );
	    return view('pages.media_all')->with($data);
	}


	}



	

	private function slugID($recebeSlug) {
		    if ($recebeSlug == 'do_meu_olhar_pra_fora')
		{
		     $slug_novo = 32;
		     return $slug_novo;
		}
	    if ($recebeSlug == 'vambora_la_dancar')
	{
	     $slug_novo = 31;
	     return $slug_novo;
	}
	elseif ($recebeSlug == 'marco_zero') {
	     $slug_novo = 30;
	     return $slug_novo;

	 }
	elseif ($recebeSlug == 'balaio_de_amor'){
	    $slug_novo = 29;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'qual_assunto_que_mais_lhe_interessa'){
	    $slug_novo = 28;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'elba_e_dominguinhos'){
	    $slug_novo = 27;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'elba_ao_vivo'){
	    $slug_novo = 26;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'elba_canta_luiz'){
	    $slug_novo = 25;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'cirandeira'){
	    $slug_novo = 24;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'o_grande_encontro_3'){
	    $slug_novo = 23;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'solar'){
	    $slug_novo = 22;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'flor_da_paraiba'){
	    $slug_novo = 21;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'o_grande_encontro_2'){
	    $slug_novo = 20;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'baioque'){
	    $slug_novo = 19;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'o_grande_encontro'){
	    $slug_novo = 18;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'leao_do_norte'){
	    $slug_novo = 17;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'paisagem'){
	    $slug_novo = 16;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'devora_me'){
	    $slug_novo = 15;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'encanto'){
	    $slug_novo = 14;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'felicidade_urgente'){
	    $slug_novo = 13;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'elba_ao__vivo'){
	    $slug_novo = 12;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'popular_brasileira'){
	    $slug_novo = 11;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'fruto'){
	    $slug_novo = 10;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'elba'){
	    $slug_novo = 9;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'remexer'){
	    $slug_novo = 8;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'fogo_na_mistura'){
	    $slug_novo = 7;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'do_jeito_que_a_gente_gosta'){
	    $slug_novo = 6;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'coracao_brasileiro'){
	    $slug_novo = 5;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'alegria'){
	    $slug_novo = 4;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'elba_ramalho'){
	    $slug_novo = 3;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'capim_do_vale'){
	    $slug_novo = 2;
	    return $slug_novo;
	}
	elseif ($recebeSlug == 'ave_de_prata'){
	    $slug_novo = 1;
	    return $slug_novo;
	}



	}


	}

