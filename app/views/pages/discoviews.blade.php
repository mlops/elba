@extends('layout.master')
@section('title', '/////#Elba Ramalho - Discos ')@stop
@section('head-script')
    @parent

    <link rel=stylesheet href="{{ URL::to(Config::get('caminho.server_public').'') }}/css/page-player.css">
    <!-- soundManager.useFlashBlock: related CSS -->
    <link rel=stylesheet href="{{ URL::to(Config::get('caminho.server_public').'') }}/css/flashblock.css">
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/sound/soundmanager2.js"></script>
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/sound/page-player.js"></script>



    <script type="text/javascript">

    // demo only, but you can use these settings too..
    // soundManager.setup({
    //   flashVersion: 9,
    //   // preferFlash: true, // for visualization effects
    //   useHighPerformance: true, // keep flash on screen, boost performance
    //   html5PollingInterval: 50,
    //   wmode: 'transparent', // transparent SWF, if possible
    //   url: '../sound/swf'
    // });

    // // custom page player configuration

    // var PP_CONFIG = {
    //   autoStart: false,      // begin playing first sound when page loads
    //   playNext: true,        // stop after one sound, or play through list until end
    //   useThrottling: false,  // try to rate-limit potentially-expensive calls (eg. dragging position around)</span>
    //   usePeakData: true,     // [Flash 9 only] whether or not to show peak data (left/right channel values) - nor noticable on CPU
    //   useWaveformData: false,// [Flash 9 only] show raw waveform data - WARNING: LIKELY VERY CPU-HEAVY
    //   useEQData: false,      // [Flash 9 only] show EQ (frequency spectrum) data
    //   useFavIcon: false     // try to apply peakData to address bar (Firefox + Opera) - performance note: appears to make Firefox 3 do some temporary, heavy disk access/swapping/garbage collection at first(?) - may be too heavy on CPU
    // }


    soundManager.setup({
      // debugMode: true, 
      // // use HTML5 audio for MP3/MP4, if available 
      // preferFlash: false, 
      // useFlashBlock: true, 

      url: '{{ URL::to(Config::get("caminho.server_public")."") }}/js/sound/swf',
      // html5PollingInterval: null,
      // waitForWindowLoad: false

    });


    // demo only..
    function setTheme(sTheme) {
      var o = document.getElementsByTagName('ul')[0];
      o.className = 'playlist'+(sTheme?' '+sTheme:'');
      return false;
    }


    </script>


    <!-- Add fancyBox -->
    <link rel="stylesheet" href="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/jquery.fancybox.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>



    <style type="text/css">
   ul.playlist li {
       font-size: 1em;
       font-family: "Open Sans", "Helvetica-neue", arial, verdana sans-serif;
       -webkit-font-smoothing: antialiased;
       border-bottom: 1px dotted black;
       padding: 0.25em 0.5em 1.6em 0.5em;
   }
   ul.playlist li .compositor {
     font-family: "Open Sans", "Helvetica-neue", arial, verdana sans-serif;
    font-size: 0.75em;
     margin-right: 5%;
     font-style: italic;
     margin-top: 8px;
    
   }

   ul.playlist li .letra {
     font-family: "Open Sans", "Helvetica-neue", arial, verdana sans-serif;
    font-size: 0.75em;
     margin-right: 1%;
     font-style: italic;
     margin-top: 8px;
     float: right;
     clear: both; 
   }

   ul.playlist li .timing {
       height: auto;
       font: 60%  "Open Sans", "Helvetica-neue", arial, verdana sans-serif;
       background-color: #B0254F;
       border: #B0254F;
   }
   ul.playlist li.sm2_paused .timing, ul.playlist.use-peak li.sm2_paused .peak {
        background-color: #999; 
        border-color: #999; 
   }
   ul.playlist li.sm2_playing, ul.playlist li.sm2_playing:hover {
       background-color:#B0254F;
   }
   ul.playlist li .controls .statusbar .position {
       background-color: #000000;
         border-right: 3px solid #000000;
         height: 0.694em;
   }
   ul.playlist li .controls {
       margin-top: 1.90em;
   }
   ul.playlist li .controls .statusbar .position, ul.playlist li .controls .statusbar .loading, ul.playlist li .controls .statusbar .annotation {
       height: 1em;
   }
   ul.playlist li .controls .statusbar {
       height: 1em;
   }

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
    //background-color: blue;
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
  //background-color: orange;
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
                <h2>{{  $disco->nome_disco }}</h2>
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
            <div class="purchase-btn table-item invisible">
                <a href="#" target="_blank">Comprar Disco</a> 
            </div>
            <div class="album-shares table-item">
                <ul>
                    <li><a class="share-toggle" href="https://www.facebook.com/ElbaRamalhoOficial" data-network="facebook"  data-text="ELBA" data-desc="Elba"><span class="mono-social">&#xe027;</span> Like</a></li>
                    <li><a class="share-toggle" href="" data-network="twitter"  data-text="ELBA" data-desc="show!!"><span class="mono-social">&#xe086;</span> Tweet</a></li>
                    <li><a class="share-toggle" href="" data-network="instagram"  data-text="ELBA" data-desc="show2!!" ><span class="mono-social">&#xe100;</span> instagram</a></li>
                </ul>
            </div>
            <div class="back-to-album table-item">
                <a class="album-details-close" href="/disco/">
                    <img src="{{ URL::to(Config::get('caminho.server_public').'/images/icon-close-black.svg')  }}" alt="Back">
                </a>
            </div>
        </div>
    </header>



    <div id="album-media">

        <article class="album-tracks-item">
    <h2><!-- nome do disco --></h2>
    <div class="album-tracks-col-left">
        <div class="post-thumb">
        <a class="fancybox" rel="gallery1" href="{{  URL::to(Config::get('caminho.server_public').'/images/capas/') }}/{{  $disco->capa_disco }}" title="">
          <img src="{{  URL::to(Config::get('caminho.server_public').'/images/capas/') }}/{{  $disco->capa_disco }}" alt="ELBA">  
        </a>
       </div>
                    <div class="album-purchase-links">
                      <ul>
                        @if ($disco->id== 32)
                          <li><a href="https://itunes.apple.com/br/album/do-meu-olhar-para-fora/id975878265" target="_blank">Comprar</a></li>
                          <li>{{  $disco->gravadora }} <br></li>
                          <li><strong>FICHA TÉCNICA:</strong><br></li>
                          <li>{{  $disco->fx_tecnica }}</li>
                          @else
                          <li>{{  $disco->gravadora }} <br></li>
                          <li><strong>FICHA TÉCNICA:</strong><br></li>
                          <li>{{  $disco->fx_tecnica }}<br><br></li>
                        @endif

                      </ul>

            </div>

    </div>


 @endforeach

 <div class="album-tracks-col-right">
  <ul>

    <li class="track-listing-item">
      <div class="stream-controls">

        <ul class="playlist">
        @foreach($disco->Musica as $musica)
        {{--  @foreach($musicas1 as $musica) --}}
         <li>

           <a href="{{ URL::to(Config::get('caminho.server_public').'')}}/musicas/disco{{ $disco->id }}/{{ $musica->faixa_mp3 }} "  type="audio/mp3"> {{  $musica->faixa }}</a>
           <em class="compositor">{{  $musica->compositor }}</em>
           <span class="st-arrow">Letra</span>
           <div class="stream-letra">
          {{--  <hr/ class="space-letra-top-musicas"> --}}
            <hr/ class="space-letra-top">
            <p>{{  $musica->letra }}</p><br>
            
            @if(empty($musica->creditos))

            @else 
            <p><strong>Ficha Técnica:</strong></p>
            {{ $musica->creditos }}
            @endif


          </div>
        </li>

        @endforeach
      </ul>{{-- fim playlist --}}
    </div>{{--  //fim strem controls --}}
  </li>{{-- fim track-listing-items --}}
</ul> <!-- //fim primeira ul -->
</div>
</article>
</div>

</section>
<section class ="release">
 <div class="release-txt-wrap"> 


  @foreach($discos as $disco)
  @if(empty($disco->release))
        @if ($disco->id == 16)
                <img src="{{URL::to(Config::get('caminho.server_public').'/images/extras/'.$disco->id.'')}}/paisagem-fallback.jpg" 
                alt=""  />
        @elseif ($disco->id == 30)
                <img src="{{URL::to(Config::get('caminho.server_public').'/images/extras/'.$disco->id.'')}}/marcozero-fallback.jpg" 
                alt=""  />  
        @endif
    @else
    {{  $disco->release }}
    @endif
  @endforeach

</div>

 <div class="disco-wrap"> 
 
 @foreach($disco->Extra as $extra)


      <p style="float:left; height:250px; width:250px; overflow:hidden; margin-top: 10px; margin-left: 30px; margin-bottom: 10px; ">
       <a class="fancybox" rel="gallery1" 
      href="{{URL::to(Config::get('caminho.server_public').'')}}/images/extras/{{$disco->id}}/{{ $extra->extras }}" 
      title="">
 <img src="{{URL::to(Config::get('caminho.server_public').'')}}/images/extras/{{$disco->id}}/thumbs/{{ $extra->extras_s }}" 
    alt=""  /> 
      </a> 
         
    </p>

@endforeach
</div>
<div style="clear: both;"></div>
</section>


@stop 

@section('script-js')
{{-- <script type="text/javascript" src="../js/jquery.accordion.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script> --}}
<script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/jquery.accordion.js"></script>
<script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">

 $(document).ready(function(){
      $(".st-arrow").click(function(){
          var obj = $(this).next();
             $(obj).css('display')=='none' ?  $(obj).slideDown("slow") :  $(obj).slideUp("slow");
       });

      $(".fancybox").fancybox({
          // openEffect  : 'fade',
          // closeEffect : 'fade'
        });

      // $('.album > .songlist > li').click(function() {
      // var songId = $(this).attr("title");
      // :
      // :
      // var songURL = "/assets/music/" + songId;
      // :
      // :
      // soundManager.createSound({
      // id: songId,
      // url: songURL,
      // onfinish: function() { ......

      // :
      // :
      // soundManager.play(songId);

      // });

      });
</script>

@stop
