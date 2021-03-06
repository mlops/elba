@extends('layouts.default')


@section('content')


<section id="music">

    <header id="music-sub-header">

        <div class="music-sub-header-inner">
     @foreach($discos as $disco)
            <div class="release-title table-item">
                <h2>{{ $disco->nome_disco }}</h2>
            </div>
    
            <div class="media-type-nav table-item">
                <ul>
                    <li>
                        <a class="current-media-view" href="#" data-media-type="songs" data-post-type="album" data-post-id="oioio">Musicas</a>
                    </li>

                    <li>
                        <a class="" href="#" data-media-type="gallery" data-post-type="album" data-post-id="ioioi">Galeria</a>
                    </li>

             
                </ul>
            </div>
            <div class="purchase-btn table-item">
                <a href="#" target="_blank">Comprar Disco</a> </div>
            <div class="album-shares table-item">
                <ul>
                    <li><a class="share-toggle" href="{{ URL::to(Config::get('caminho.server_public').'https://www.facebook.com/ElbaRamalhoOficial') }}" data-network="facebook"  data-text="ELBA" data-desc="Elba"><span class="mono-social">&#xe027;</span> Like</a></li>
                    <li><a class="share-toggle" href="{{ URL::to(Config::get('caminho.server_public').'/disco/') }}" data-network="twitter"  data-text="ELBA" data-desc="show!!"><span class="mono-social">&#xe086;</span> Tweet</a></li>
                    <li><a class="share-toggle" href="" data-network="instagram"  data-text="ELBA" data-desc="show2!!" ><span class="mono-social">&#xe100;</span> instagram</a></li>
                </ul>
            </div>
            <div class="back-to-album table-item">
                <a class="album-details-close" href="/disco/">
                    <img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close-black.svg') }}" alt="Back">
                </a>
            </div>
        </div>
        
    </header>



    <div id="album-media">

        <article class="album-tracks-item">
    <h2> <!-- nome do disco --></h2>
  
    <div class="album-tracks-col-left">
        <div class="post-thumb">
            <img src="{{ URL::to(Config::get('caminho.server_public').'img/capas/') }}/{{ $disco->capa_disco }}" alt="ELBA">   </div>
                    <div class="album-purchase-links">
                <ul>
                    <li><a href="#" target="_blank">Comprar</a></li>                </ul>
            </div>
    </div>

 @endforeach

<div class="album-tracks-col-right">
<ul>
<br/>
<strong>DISCO 1</strong> <br/>
@foreach($musicas1 as $musica1)


    <li class="track-listing-item">
    <div class="stream-controls">

        <ul>

                <li>

                        <button class="trigger-track-preview" data-track-id="{{ $musica1->id }}" type="audio/mpeg"
                                data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas')}}/disco{{  $disco->id }}/cd1/{{ $musica1->faixa_mp3 }}"
                                data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas')}}/disco{{  $disco->id }}/cd1/{{ $musica1->faixa_ogg }}"/>
                                <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                                <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                              {{ $musica1->faixa }} <em class="compositor">{{ $musica1->compositor }}</em>
                        </button>


                </li>

        </ul>
    </div>
        <div class="track-meta">

          <ul>

                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="http://www.youtube.com/watch?v=LXXQLa-5n5w">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                         <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                        </li>
                 <!--        <li class="track-duration">(4:18)</li> -->

                        <!-- <li class="track-credits"><a href="#" data-post-id="3720" data-preview-type="credits">Cr  ditos</a></li> -->
                        <li class="track-lyrics"><a href="#" data-post-id="3720" data-preview-type="lyrics">Letras</a></li>
            </ul>
        </div>
    </li>

@endforeach
<br/>
<strong>DISCO 2</strong> <br/>
@foreach($musicas2 as $musica2)
 
    <li class="track-listing-item">
    <div class="stream-controls">

        <ul>

                <li>

                        <button class="trigger-track-preview" data-track-id="{{ $musica2->id }}" type="audio/mpeg"
                                data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas')}}/disco{{  $disco->id }}/cd2/{{ $musica2->faixa_mp3 }}"
                                data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas')}}/disco{{  $disco->id }}/cd2/{{ $musica2->faixa_ogg }}"/>
                                <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                                <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                              {{ $musica2->faixa }} <em class="compositor">{{ $musica2->compositor }} </em>
                        </button>


                </li>

        </ul>
    </div>
        <div class="track-meta">

          <ul>

                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="http://www.youtube.com/watch?v=LXXQLa-5n5w">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                         <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                        </li>
                 <!--        <li class="track-duration">(4:18)</li> -->

                        <!-- <li class="track-credits"><a href="#" data-post-id="3720" data-preview-type="credits">Cr  ditos</a></li> -->
                        <li class="track-lyrics"><a href="#" data-post-id="3720" data-preview-type="lyrics">Letras</a></li>
            </ul>
        </div>
    </li>

@endforeach

 </ul>
</div>
</article>
</div>
</section>


@stop 

