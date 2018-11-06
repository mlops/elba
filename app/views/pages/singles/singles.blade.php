@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Single ')
@section('head-script')
    @parent
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <style>
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
        .fancybox-custom .fancybox-skin {
          box-shadow: 0 0 50px #222;
        }
        .fancybox-title-float-wrap {
            position: absolute;
            bottom: 35px;
            right: 50%;
            z-index: 8050;
            text-align: center;
            width: 100%;

        }
        .fancybox-title-float-wrap .child {
            display: inline-block;
            background: transparent;
            background: rgba(0, 0, 0, 0.8);
            color: #FFF;
            font-weight: bold;
            line-height: 24px;
            white-space: nowrap;
            width: 100%;
            position: relative;
            border-radius: 0;

        }


        @media (min-width: 0) and (max-width: 400px) {
          .fancybox-title-float-wrap .child {
            font-size: 12px;
          }
        }
       
    


     div.description{
        position:absolute; /* absolute position (so we can position it where we want)*/
        bottom:0px; /* position will be on bottom */
        left:0px;
        display:none; /* hide it */
        /* styling bellow */
        background-color:black;
        font-family: 'tahoma';
        font-size:15px;
        color:white;
     }
     div.description_content{
        padding:10px;
     }

    </style>

   <script type="text/javascript">
   $(window).load(function(){
    //for each description div...
    $('div.description').each(function(){
        //...set the opacity to 0...
        $(this).css('opacity', 0);
        //..set width same as the image...
        $(this).css('width', $(this).siblings('img').width());
        //...get the parent (the wrapper) and set it's width same as the image width... '
        $(this).parent().css('width', $(this).siblings('img').width());
        //...set the display to block
        $(this).css('display', 'block');
    });
    
    $('div.singles-itens').hover(function(){
        //when mouse hover over the wrapper div
        //get it's children elements with class descriptio
        //and show it using fadeTo
        $(this).children('.description').stop().fadeTo(500, 0.7);
    },function(){
        //when mouse out of the wrapper div
        //use fadeTo to hide the div
        $(this).children('.description').stop().fadeTo(500, 0);
    });
    
   });
     
   </script>
@stop

@section('content')

  @include('layout.menu-fix3')
  @include('layout.menu3')

  <section id="singles">
    <div class="wrap-singles">
        <header class="h-singles">
            <h2 class="singles-titulo">SINGLES</h2>
            <p class="singles-resumo">Aqui estão os compactos, singles promocionais e digitais lançados pelas gravadoras para promover as chamadas "músicas de trabalho" nas rádios. A maioria deles não foi comercializada, tornando-se hoje verdadeiras raridades. Clique nas imagens para ampliar e ter acesso à informações sobre cada um deles. </p>
        </header>
    @foreach ($singles as $single)
        <div class='singles-itens'>
                <!-- image -->
<a href="{{ URL::to(Config::get('caminho.server_public'))}}/images/sk7/single/{{$single->single_bg}}" class="fancybox" title="{{$single->single_tx}}">
            <img src='{{ URL::to(Config::get("caminho.server_public"))}}/images/sk7/single/{{$single->single_sm}}' alt="{{$single->single}}" />
        </a>
            <div class='description'>
                <!-- description content -->
                <div class='description_content'>{{$single->single}}</div><!-- end description content -->
            </div><!-- end description div -->
        </div><!-- singles-itens -->
        @endforeach
    </div><!-- wrap-singles -->
</section>


    @include('layout.rodape3')

@stop
@section('script-js')

<script>
$(document).ready(function() {
    $('.fancybox').fancybox({
      padding: 5,
      showNavArrows: true,
      helpers: {
          overlay: {
            locked: false
          }
        }
    });

  });
</script>
@stop
