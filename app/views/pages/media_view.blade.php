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
    <h2>{{ $disco->nome_disco }}</h2>
  
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
<li>DISCO 1</li> <br/>
@foreach($musicas1 as $musica1)

   <li> {{$musica1->faixa}}</li> 

@endforeach
<br/>
<li>DISCO 2</li> <br/>
@foreach($musicas2 as $musica2)
   <li> {{$musica2->faixa}}</li> 

@endforeach

 </ul>
</div>
</article>
</div>
</section>


@stop 

