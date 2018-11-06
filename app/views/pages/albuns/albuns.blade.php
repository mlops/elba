@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Single ')
@section('head-script')
	@parent
	<style>
	.gallery .gallery__item:nth-child(5n) {
		float: left;
	}
	</style>
    
 
@stop

@section('content')

  @include('layout.menu-fix3')
  @include('layout.menu3')




<div id="albuns">
<div class="album-top">
@foreach($albuns as $album)
		<img src="{{  URL::to(Config::get('caminho.server_public').'/images/albuns/') }}/{{strtolower($album->album)}}/{{$album->img_destaque }}" alt="{{$album->album}}">
	<ul class="gallery">
	@foreach ($album->Images as $album_imgs)
		<li class="gallery__item"><img src="{{  URL::to(Config::get('caminho.server_public').'/images/albuns/') }}/{{strtolower($album->album)}}/{{ $album_imgs->imgs_album }}" alt="{{$album->album}}"></li>
	@endforeach
	</ul>
    
@endforeach	

	
</div>
</div>




    @include('layout.rodape3')

@stop
@section('script-js')


@stop
