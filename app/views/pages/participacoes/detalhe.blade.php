@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Participções ')
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

/*       .stream-letra {
          overflow: hidden;
          display: none;
          line-height: 150%;
          letter-spacing: 0.1px;
       }*/
       .st-content {
         padding: 5px 0px 30px 0px;
       }
       .st-arrow {
         float: right;
         padding: 0 6px 0 0;
         margin-top: 0;
         width: 90%;
         height: 10%;
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
      .fancybox-wrap {
        overflow: hidden;
           display: inline-block; /* Necessary to trigger "hasLayout" in IE */
           display: block; /* Sets element back to block */
           z-index: 999999;
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
              z-index: 99999;

          }
        </style>

@stop

@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')
<section id="participacoes-bg">
    <section class="participacoes-dt">
        @foreach ($participacoes as $disco)
            <header class="participacoes-dt-subheader"><h2 class="participacoes-dt-nome_disco">{{ $disco->nome_disco }}</h2><h2 class="participacoes-dt-ano">{{ $disco->Anos->ano }}</h2></header>
        
    <div class="participacoes-wrap">
        <article class="participacoes-tracks-item">
            <div class="participacoes-tracks-col-left">
                <div class="post-thumb">
                <a href="{{ URL::to(Config::get('caminho.server_public').'')}}/images/participacoes/capas/{{$disco->capa_participacao }}" class="fancybox" rel="gallery1"><img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/participacoes/capas/{{$disco->capa_participacao }} " alt="{{$disco->nome_disco }}" /></a>
                </div><!-- /.post-thumb -->
                <div class="album-fxt"></div><!-- /.album-purchase-links -->

            </div><!-- /.participacoes-tracks-col-left -->
            <div class="participacoes-tracks-col-right">
                <ul>
                    <li class="track-listing-item">
                        <div class="stream-controls " >
                            <ul class="playlist">
                              @foreach ($disco->ParticipacoesExtras as $musica)

                              @if(empty($musica->faixa_titulo))
                                <h2>vazio!</h2>
                                @else
                                <li>
                                    <a href="{{ URL::to(Config::get('caminho.server_public').'')}}/musicas/participacoes/{{ $disco->Anos->ano  }}/{{ $musica->faixa_mp3 }} "  type="audio/mp3"> {{  $musica->faixa_titulo }}</a>
                                    <em class="compositor">{{  $musica->compositor }}</em>
                                    @if(empty($musica->letra))
                                    @else
                                    <span class="st-arrow">Letra</span>
                                    <div class="stream-letra" id="accordion">
                                    <hr/ class="space-letra-top">
                                    <p>{{  $musica->dolp }}</p>
                                    <p>{{  $musica->letra }}</p><br>
                                    @endif


                                    @if(empty($musica->creditos))
                                    @else
                                    <p><strong>FICHA TÉCNICA:</strong></p>
                                    {{ $musica->creditos }}
                                    @endif
                                    </div>

                                </li>
                            @endif



                        @endforeach

                                  </ul>{{-- fim playlist --}}
                        </div><!-- /.stream-controls -->
                    </li><!-- /.track-listing-item -->
                </ul>
            </div><!-- /.participacoes-tracks-col-right -->
        </article><!-- /.album-tracks-item -->
    </div><!-- /.participacoes-wrap -->
    @endforeach
    </section>
</section>
  @include('layout.rodape3')
@stop
@section('script-js')
    @parent
  <script type="text/javascript" src="http://fancybox.net/js/fancybox-1.3.4/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/jquery.accordion.js"></script>
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/jquery.easing.1.3.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      
        $(".st-arrow").click(function(){
                var obj = $(this).next();
                $(obj).css('display')=='none' ?  $(obj).slideDown("slow") :  $(obj).slideUp("slow");
         });

        $('.fancybox').fancybox({
          helpers: {
              overlay: {
                locked: false
              }
            }
        });
    });
    </script> 
@stop
