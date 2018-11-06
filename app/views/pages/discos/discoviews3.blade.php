@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Singles')
@section('head-script')
    @parent
    <meta http-equiv="Cache-control" content="private">
    <meta http-equiv="Cache-control" content="no-cache">


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




    <!-- Add jQuery library -->
  <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/fancybox/jquery-1.10.1.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::to(Config::get('caminho.server_public').'') }}/js/source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="{{ URL::to(Config::get('caminho.server_public').'') }}/js/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
  <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="{{ URL::to(Config::get('caminho.server_public').'') }}/js/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
     <style type="text/css">

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

       .st-content {
         padding: 5px 0px 30px 0px;
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

      .fancybox-lock {
        overflow-x: hidden !important;
        overflow-y: scroll !important;
        width: auto;
        z-index: 99999;
          }
          .fancybox-lock .fancybox-overlay {
          /*  overflow: auto;
              overflow-y: scroll;*/

              overflow: hidden !important;
              z-index: 99999;




          }
          .fancybox-wrap{
            z-index: 99999;
          }
          .fancybox-inner{
            overflow-y: hidden !important;
          }



      .fancybox-custom .fancybox-skin {
          -webkit-box-shadow: 0 0 50px #222;
          -moz-box-shadow: 0 0 50px #222;            
          box-shadow: 0 0 50px #222;
        }
      /*  body {
          margin: 0 auto;
        }*/

        </style>

@stop
@section('content')
    @include('layout.menu-fix3')
  @include('layout.menu3')
<section id="discos-bg">
    <section class="discos-dt">
        @foreach ($discos as $disco)
            <header class="discos-dt-subheader">
              <h2 class="discos-dt-nome_disco">{{$disco->nome_disco}}</h2>
              <h2 class="discos-dt-ano">{{$disco->ano}}</h2>
            </header>

    <div class="discos-wrap">
        <article class="discos-tracks-item">
            <div class="discos-tracks-col-left">
                <div class="post-thumb">
                 <a class="fancybox" rel="gallery1" href="{{  URL::to(Config::get('caminho.server_public').'/images/capas/') }}/{{  $disco->capa_disco }}" title="">
                   <img src="{{  URL::to(Config::get('caminho.server_public').'/images/capas/') }}/{{  $disco->capa_disco }}" alt="{{$disco->nome_disco}}">
                 </a>
                </div><!-- /.post-thumb -->
                        <div class="album-purchase-links">
                          <ul>
                            @if ($disco->id== 34)
                              <li><a href="https://itunes.apple.com/br/album/do-meu-olhar-para-fora/id975878265" target="_blank">Comprar</a></li>
                              <li class="sbr-disco">{{  $disco->sbr_disco }}<br/></li>
                              <li>{{  $disco->fx_tecnica }}</li>
                              @else
                              <li class="sbr-disco">{{  $disco->sbr_disco }}<br/></li>
                              <li>{{  $disco->fx_tecnica }}<br><br></li>
                            @endif

                          </ul>

                </div>

            </div><!-- /.discos-tracks-col-left -->

            <div class="discos-tracks-col-right">
                <ul>
                    <li class="track-listing-item">
                        <div class="stream-controls">
                          <ul class="playlist">
                              @foreach($disco->Musica as $musica)
                            <li>
                              <a class="disco-nome" href="{{ URL::to(Config::get('caminho.server_public').'')}}/musicas/disco{{ $disco->id }}/{{ $musica->faixa_mp3 }} "  type="audio/mp3"> {{  $musica->faixa }}</a>
                              <em class="compositor">{{  $musica->compositor }}</em>
                              <span class="st-arrow">Letra</span>
                              <div class="stream-letra">
                                <hr/ class="space-letra-top-musicas">
                                <hr/ class="space-letra-top">
                                <p>{{  $musica->letra }}</p><br>
                                @if(empty($musica->creditos))
                                @else
                                <p><strong>FICHA TÉCNICA:</strong></p>
                                {{ $musica->creditos }}
                                @endif
                              </div>
                            </li>
                      @endforeach
                    </ul>{{-- fim playlist --}}
                  </div><!-- /.stream-controls -->
                </li><!-- /.track-listing-item -->
              </ul>
            </div><!-- /.discos-tracks-col-right -->
          </article><!-- /.album-tracks-item -->
        </div><!-- /.discos-wrap -->
      </div>
    </div><!-- /.discosextras-wrap -->

</section>
</section>
sjc-fallback
<section id="extras-bg">
<div class="extras-release">
@foreach($discos as $disco)
@if(empty($disco->release))
      @if ($disco->id == 17)
              <img src="{{URL::to(Config::get('caminho.server_public').'/images/extras/'.$disco->id.'')}}/paisagem-fallback.jpg" 
              alt=""  />
      @elseif ($disco->id == 31)
              <img src="{{URL::to(Config::get('caminho.server_public').'/images/extras/'.$disco->id.'')}}/marcozero-fallback.jpg" 
              alt=""  />
      @elseif ($disco->id == 32)
              <img src="{{URL::to(Config::get('caminho.server_public').'/images/extras/'.$disco->id.'')}}/sjc-fallback.jpg" 
              alt=""  />
      @elseif ($disco->id == 35)
              <img src="{{URL::to(Config::get('caminho.server_public').'/images/extras/'.$disco->id.'')}}/cordas-fallback.jpg" 
              alt=""  />  
      @endif
  @else
  {{  $disco->release }}
  @endif
@endforeach
</div><!-- /.extras-release -->



<div class="extras-imgs">
  <div class="extras-fotos">
  @if(empty($disco->Extra->first()))
  @else
  <h2>Encarte</h2>
  @endif

    @foreach ($disco->Extra as $extra)
      <a class="fancybox" rel="gallery1" href="{{URL::to(Config::get('caminho.server_public').'')}}/images/extras/{{$disco->id}}/{{ $extra->extras }}" 
         title="">
    <img src="{{URL::to(Config::get('caminho.server_public').'')}}/images/extras/{{$disco->id}}/thumbs/{{ $extra->extras_s }}" 
       alt=""  />
         </a>
    @endforeach

  </div><!-- /.extras-fotos -->
  <div class="extras-k7">
    @if(empty($disco->K7->first()))
    @else
    <h2>K7</h2>
    @endif
    @foreach ($disco->K7 as $extrak7)
   <a class="fancybox" rel="gallery1" href="{{URL::to(Config::get('caminho.server_public').'images/sk7/k7').'/'.$extrak7->k7  }}" title="">
     <img src="{{URL::to(Config::get('caminho.server_public').'images/sk7/k7').'/'.$extrak7->k7_sm  }}" alt=""  />
   </a>
    @endforeach
  </div><!-- /.extras-k7 -->
</div><!-- /.extras imgs -->


@endforeach
{{-- <ul> exemplo carregar fancybox via array
  <li><a id="fancybox-manual-c" href="javascript:;">Open gallery</a></li>
</ul> --}}
</section><!-- /.extras-bg -->




  @include('layout.rodape3')


@stop
@section('script-js')
    @parent
    {{-- <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/jquery.accordion.js"></script> --}}
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/jquery.easing.1.3.js"></script>

    <script type="text/javascript">


        $(document).ready(function() {
          
          var $= jQuery.noConflict();
          
                $('.fancybox').fancybox({
                   helpers: {//este helper evita o erro de pular
                      overlay: {
                        locked: false
                      }
                    }
                });

          $("#fancybox-manual-c").click(function() {

            $.fancybox.open([
              @foreach ($discos as $disco)
                @foreach ($disco->k7 as $extras)
             {

                  href :"{{  URL::to(Config::get('caminho.server_public').'images/sk7/k7').'/'. $extras->k7  }}"

             },
             @endforeach
              @endforeach
            ], { padding: 5,
                  helpers : {
                    thumbs : {
                      width: 75,
                      height: 50,
                    },
                    overlay: {
                      locked: false
                    }
                  }
            });
          });

          
          $(".st-arrow").click(function(){
              var obj = $(this).next();
                 $(obj).css('display')=='none' ?  $(obj).slideDown("slow") :  $(obj).slideUp("slow");
           });

        

        });

      

      </script>


@stop