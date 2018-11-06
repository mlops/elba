@extends('layouts.default')


@section('content')


<section id="music">


<header id="music-sub-header">

        <div class="music-sub-header-inner">
                 <div class="release-title table-item">
                <h2>Discos</h2>
            </div>
    
            <div class="media-type-nav table-item ">
                <ul>
                    <li class='helper_invisible'>
                        <a class="current-media-view" href="#" data-media-type="songs" data-post-type="album" data-post-id="oioio">Musicas</a>
                    </li>

                    <li class='helper_invisible'>
                        <a class="" href="#" data-media-type="gallery" data-post-type="album" data-post-id="ioioi">Galeria</a>
                    </li>

           
                </ul>
            </div>
            <div class="purchase-btn table-item">
                <a href="#" target="_blank">Comprar Disco</a> </div>
            <div class="album-shares table-item">
                <ul>
                    <li><a class="share-toggle" href="https://www.facebook.com/ElbaRamalhoOficial" data-network="facebook"  data-text="ELBA" data-desc="Elba"><span class="mono-social">&#xe027;</span> Like</a></li>
                    <li><a class="share-toggle" href="http://elba.dev:8000/disco" data-network="twitter"  data-text="ELBA" data-desc="show!!"><span class="mono-social">&#xe086;</span> Tweet</a></li>
                    <li><a class="share-toggle" href="" data-network="instagram"  data-text="ELBA" data-desc="show2!!" ><span class="mono-social">&#xe100;</span> instagram</a></li>
                </ul>
            </div>
            <div class="back-to-album table-item">
                <a class="album-details-close" href="/disco/">
                    <img src="http://elba.dev:8000/img/elba/icon-close-black.svg" alt="Back">
                </a>
            </div>
        </div>
        
    </header>



 @foreach($discos as $disco)


    <div id="album-media">

        <article class="album-tracks-item">
    <h2>{{ $disco->nome_disco }}</h2>
  
    <div class="album-tracks-col-left">
        <div class="post-thumb">
            <img src="{{ URL::to(Config::get('caminho.server_public').'img/capas/') }}/{{ $disco->capa_disco }}" alt="ELBA">   </div>
                    <div class="album-purchase-links">
                <ul>
                    <li><a href="#" target="_blank">Comprar</a></li>                </ul>
            </div>
    </div>



<div class="album-tracks-col-right">
    <ul>
@foreach(Discos::join('musicas', 'discos.id', '=', 'musicas.disco_id')->where('musicas.disco_id', '=', $disco->id )->get() as $musica)
    <li class="track-listing-item">
  
        <div class="stream-controls">

            <ul>

 
                    <li>

                            <button class="trigger-track-preview" data-track-id="{{ $musica->id }}" type="audio/mpeg"
                                data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas')}}/disco{{  $disco->id }}/{{ $musica->faixa_mp3 }}"
                                data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas')}}/disco{{  $disco->id }}/{{ $musica->faixa_ogg }}"/>
                                <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                                <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                                  {{ $musica->faixa }} <em class="compositor"> {{ $musica->compositor }}  </em>
                            </button>



                    </li>

            </ul>
        </div>
      
    </li>
 @endforeach
 </ul>
 </div>
 </article>
 </div> 
 @endforeach
 </div>
 </section>


@stop 

