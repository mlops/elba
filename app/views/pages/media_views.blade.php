@extends('layout.master3')
@section('title', '/////#Elba Ramalho ')@stop
@section('head-script')
    @parent
    <meta http-equiv="Cache-control" content="private">
    <meta http-equiv="Cache-control" content="no-cache">

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <link rel=stylesheet href="{{ URL::to(Config::get('caminho.server_public').'') }}/css/page-player.css">
    <!-- soundManager.useFlashBlock: related CSS -->
    <link rel=stylesheet href="{{ URL::to(Config::get('caminho.server_public').'') }}/css/flashblock.css">
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/sound/soundmanager2.js"></script>
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/sound/page-player.js"></script>
    <script type="text/javascript">

    soundManager.setup({
      url: '{{ URL::to(Config::get("caminho.server_public")."") }}/js/sound/swf',
      html5PollingInterval: null,
      waitForWindowLoad: false

    });


    // demo only..
    function setTheme(sTheme) {
      var o = document.getElementsByTagName('ul')[0];
      o.className = 'playlist'+(sTheme?' '+sTheme:'');
      return false;
    }
    </script>
<style type="text/css">
   .stream-letra {
      overflow: hidden;
      display: none;
      line-height: 150%;
   }
   .st-content {
     padding: 5px 0px 30px 0px;
   }
   .st-arrow {
      float: right;
      padding: 0 6px 0 0;
      margin-top: 10px;
      position: relative;
      text-align: right;
      cursor:pointer;
   }
   .space-letra-top { 
    height: 0px;
    visibility: hidden;
    margin-bottom: -14px;
  }
   .space-letra-top-musicas {
    margin-top: 5px;
/*    width: 80%;
    margin-right: 20%;*/
  }
  .release {
    width: 100%;
    background-color: black;

  }
  .release-txt-wrap  {
    width: 50%;
    background-color: blue;
    float: left;
  }

  .release p {
     font-family: "Open Sans", "Helvetica-neue", arial, verdana sans-serif;
    font-size: 0.85em;
    padding: 10px 0 0 20px; ;
    color:white;
    line-height: 1.5em;
  }
.disco-wrap {
  width: 50%;
  background-color: orange;
  float: right;

}

  .fancybox-lock {
    overflow-x: hidden !important;
    overflow-y: scroll !important;
    width: auto;
      }
      .fancybox-lock .fancybox-overlay {
      /*  overflow: auto;
          overflow-y: scroll;*/
          overflow: hidden !important;
      }
      #disc {
        list-style-type: disc;
         font-family: "Open Sans", "Helvetica-neue", arial, verdana sans-serif;
        font-size: 0.85em;
        padding: 10px 0 0 50px; ;
        color:white;
        line-height: 1.5em;
      }
</style>

@stop

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
    <h2><!-- nome do disco --></h2>
<div class="album-tracks-col-left">
    <div class="post-thumb">
        <img src="{{ URL::to(Config::get('caminho.server_public').'img/capas/') }}/{{ $disco->capa_disco }}" alt="ELBA">   </div>
                <div class="album-purchase-links">
            <ul>
                <li><a href="#" target="_blank">Comprar</a></li>
            </ul>
    </div>
</div>
 @endforeach
<div class="album-tracks-col-right">
<ul>
@foreach($musicas1 as $musica)
    <li class="track-listing-item">
    <div class="stream-controls">
        <ul>
                <li>
                        <button class="trigger-track-preview" data-track-id="{{ $musica->id }}" type="audio/mpeg"
                                data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas')}}/disco{{  $disco->id }}/{{ $musica->faixa_mp3 }}"
                                data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas')}}/disco{{  $disco->id }}/{{ $musica->faixa_ogg }}"/>
                                <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                                <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                              {{ $musica->faixa }} <em class="compositor">{{ $musica->compositor }}  </em>
                        </button>
                </li>

        </ul>
    </div>
        <div class="track-meta">
            <ul>

                <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                <li class="play-associated-video"></li>
                <li class="track-lyrics">
                    <a href="#" data-post-id="{{ $musica->id }}" data-preview-type="lyrics">Letras</a>
                </li>
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
@section('script-js')
    @parent
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/jquery.accordion.js"></script>
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/nav.js"></script>
    <script>
    $(document).ready(function() {
            $('.fancybox').fancybox({
              helpers: {
                  overlay: {
                    locked: false
                  }
                }
            });
            $(".st-arrow").click(function(){
                var obj = $(this).next();
                    $(obj).css('display')=='none' ?  $(obj).slideDown("slow") :  $(obj).slideUp("slow");
                 });
          });
    </script>
@stop
