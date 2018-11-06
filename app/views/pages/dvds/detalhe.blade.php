@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Dvds')
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
        #dvds-bg .dvds-wrap .dvds-tracks-item .dvds-tracks-col-right ul .track-listing-item .stream-controls ul.playlist li .compositor {
          margin-right: 10px;

        }
        #videos {
          float: right;
        }

    </style>

@stop
@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')
<section id="dvds-bg">
    <section class="dvds-dt">
        @foreach ($dvds as $dvd)
            <header class="dvds-dt-subheader"><h2 class="dvds-dt-nome_disco">{{ $dvd->dvd }}</h2><h2 class="dvds-dt-ano">{{ $dvd->ano }}</h2></header>

    <div class="dvds-wrap">
        <article class="dvds-tracks-item">
            <div class="dvds-tracks-col-left">
                <div class="post-thumb">
               <a href="{{ URL::to(Config::get('caminho.server_public').'')}}/images/dvds/{{$dvd->dvd_capa}}" class="fancybox" rel="group">
                <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/dvds/{{$dvd->dvd_capa}} " alt="{{$dvd->dvd }}" /> </a>
                </div><!-- /.post-thumb -->
                  <div class="dvds-purchase-links">
               
                            @if(empty($dvd->fx_tecnica))
                            @else
                            <p><em>{{  $dvd->sbr_disco }}</em></p><br/>
                            <p><strong>FICHA TÉCNICA:</strong></p>
                            {{ $dvd->fx_tecnica }}
                            @endif

                  </div><!-- /.dvds-purchase-links -->
            </div><!-- /.dvds-tracks-col-left -->
            <div class="dvds-tracks-col-right">
                <ul>
                    <li class="track-listing-item">
                        <div class="stream-controls">

                              <ul class="playlist">
                                <li>
                      
                                  <div class="stream-letra">
                                    {{--  <hr/ class="space-letra-top-musicas"> --}}
                                    <hr/ class="space-letra-top">
                                    <p>{{  $dvd->letra }}</p><br>
                                  </div>
                                </li>
                        </ul>{{-- fim playlist --}}
                        </div><!-- /.stream-controls -->
                    </li><!-- /.track-listing-item -->
                </ul>
            </div><!-- /.dvds-tracks-col-right -->
        </article><!-- /.album-tracks-item -->
    <div class="dvdextras-wrap">
      <div class="dvds-titulo">Encarte:</div>
      <div class="dvdextras-container">
        @foreach ($dvd->DvdsExtras->slice(0, 8) as $dvdextras)
            @if (empty($dvdextras->dvd_sm))
              <h2>EM BREVE!</h2>
              @else
              <div class="dvdextras">
                
                <a href="{{ URL::to(Config::get('caminho.server_public').'')}}/images/dvds/{{$dvdextras->dvdimg}}" class="fancybox" rel="group">
                  <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/dvds/{{$dvdextras->dvd_sm}} " alt="{{$dvdextras->dvd }}" />
                </a>
              </div>
            @endif
        @endforeach
        <p></p>
      </div><!-- dvdextras-container -->
      <div class="dvdextras-container">
          @foreach ($dvd->DvdsExtras->slice(9, 15) as $dvdextras)
              @if (empty($dvdextras->dvd_sm))
                <h2>EM BREVE!</h2>
                @else
                <div class="dvdextras">
                  
                  <a href="{{ URL::to(Config::get('caminho.server_public').'')}}/images/dvds/{{$dvdextras->dvdimg}}" class="fancybox" rel="group">
                    <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/dvds/{{$dvdextras->dvd_sm}} " alt="{{$dvdextras->dvd }}" />
                  </a>
                </div>
              @endif
          @endforeach
          <p></p>
        </div><!-- dvdextras-container -->
      </div><!-- /.dvdextras-wrap -->
      <header class="h-videos">
      <h2 class="videos-titulo">VIDEOS:</h2>
      <p class="videos-resumo"> </p>
      </header>

          <section id="videos">
                      @foreach ($dvd->videos as $videos)
    
                        @if (empty($videos->embed))
                        <h2>EM BREVE!</h2>
                          @else
                          <div class="videoWrapper">
                           {{ $videos->embed }}
                          </div>
                        @endif

                      @endforeach
          </section><!-- /#videos -->
          </div><!-- /.dvdextras-wrap -->
    </div><!-- /.dvds-wrap -->

    @endforeach
    </section>

</section>
  @include('layout.rodape3')
@stop
@section('script-js')
<script>
$(document).ready(function() {
    $('.fancybox').fancybox({
      padding: 5,
      helpers: {
          overlay: {
            locked: false
          }
        }
    });
    //abrir direto a letra ao carregar
    $(".stream-letra").slideDown('slow');
    //abrir letra ao clicar
    $(".st-arrow").click(function(){
        var obj = $(this).next();
           $(obj).css('display')=='none' ?  $(obj).slideDown("slow") :  $(obj).slideUp("slow");
     });



    // Find all YouTube videos
    var $allVideos = $("iframe[src^='//www.youtube.com']"),

        // The element that is fluid width
        $fluidEl = $("body");

    // Figure out and save aspect ratio for each video
    $allVideos.each(function() {

      $(this)
        .data('aspectRatio', this.height / this.width)

        // and remove the hard coded width/height
        .removeAttr('height')
        .removeAttr('width');

    });

    // When the window is resized
    $(window).resize(function() {

      var newWidth = $fluidEl.width();

      // Resize all videos according to their own aspect ratio
      $allVideos.each(function() {

        var $el = $(this);
        $el
          .width(newWidth)
          .height(newWidth * $el.data('aspectRatio'));

      });

    // Kick off one resize to fix all videos on page load
    }).resize();


  });
</script>
@stop
