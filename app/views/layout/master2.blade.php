<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>
<!-->
   <html class="no-js" lang="en"> <!--<![endif]-->
   <head>

   <meta charset="utf-8">
   <title>@yield('title', '//Elba Ramalho ')</title>

          @include('layout.meta')

        @section('head-script')

                <link rel=stylesheet href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                
               <link rel=stylesheet href="{{ URL::to(Config::get('caminho.server_public').'/css/app2.css') }}"> 

                <!--[if lt IE 9]>
                    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
                <!--[if lt IE 7]>
                            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
                        <![endif]-->
               <!--  //aqui carrega-se 2 x ppara evitar problemas de loading cache via CDN -->

          <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
          <script>window.jQuery || document.write('<script src="{{ URL::asset("js/jquery.min.js") }}"><\/script>')</script>

<script>
      //change imagens background 
      
   
      function ChangeIt()
      {
      
       //var totalCount = 3;
       var currentTime = new Date().getHours();
       if (7 <= currentTime && currentTime < 20) {
    
          document.getElementById('#bg').background = '{{ URL::to(Config::get("caminho.server_public").'') }}/images/back/8.jpg';
          document.getElementById('#bg').style.backgroundRepeat = "no-repeat";// Background repeat
          document.getElementById('#bg').style.backgroundAttachment = "fixed";
          document.getElementById('#bg').style.backgroundPosition = "top center";
          document.getElementById('#bg').style.backgroundSize = auto;
      }
      else {

          document.getElementById('#bg').background = '{{ URL::to(Config::get("caminho.server_public").'') }}/images/back/8.jpg';
          document.getElementById('#bg').style.backgroundRepeat = "no-repeat";// Background repeat
          document.getElementById('#bg').style.backgroundAttachment = "fixed";
          document.getElementById('#bg').style.backgroundPosition = "top center";
          document.getElementById('#bg').style.backgroundSize = auto;
      }


  }

</script>
<style>
  #bg {
    position: fixed; 
    top: -50%; 
    left: -50%; 
    width: 200%; 
    height: 200%;
    z-index: -9999;
  }
  #bg img {
    position: absolute; 
    top: 0; 
    left: 0; 
    right: 0; 
    bottom: 0; 
    margin: auto; 
    min-width: 50%;
    min-height: 50%;
    z-index: --9999;
  }
</style>

        @show


</head>
<body>
<div id="bg">
  <img src="{{ URL::to(Config::get('caminho.server_public').'') }}/images/back/8.jpg" alt="">
</div>
<div class="wrap">

     @include('layout.menu')

     @yield('content')

     @include('layout.rodape')

</div><!-- fim wrap -->

</body>

<script>
var $ = jQuery.noConflict();
$(document).ready(function()  {
     // // desabilitar ctrl scroll zoom
  $(window).keydown(function(event) 
  {
      if((event.keyCode == 107 && event.ctrlKey == true) || (event.keyCode == 109 && event.ctrlKey == true))
      {
          event.preventDefault(); 
      }

  });

  $(window).bind('mousewheel DOMMouseScroll', function(event) 
  {
      if(event.ctrlKey == true)
      {
          event.preventDefault(); 
      }
  });
  //FIm desabilitar ctrl scroll zoom
  //
  // Muda O Background
  //ChangeIt();

});


</script>


@yield('script-js')


</html>