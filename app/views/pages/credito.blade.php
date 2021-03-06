<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>BeyonceElba</title>

<!--     <link rel="stylesheet" href="css/byonce.css" media="screen" type="text/css" /> -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::to('css/byonce.css') }}" /></script>
    <script src="{{ URL::asset('js/modernizr.js') }}"></script>

<!-- server -->
<!--     <link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/byonce.css') }}" /></script>
    <script src="{{ URL::asset('public/js/modernizr.js') }}"></script> -->

</head>

<body class="home blog elba">

<!-- <div id="loading-mask"></div> -->

<div id="header-wrapper">
  <header id="main-header" class="compact">
          <a id="main-brand" href="\">
            <img src="{{ URL::asset('img/elba/logo.svg') }}" alt="Elba">
          </a>

  </header>

</div>


<button id="nav-trigger-mobile"><span></span><span></span><span></span>
</button>
<div id="nav-desktop">
    <button id="nav-trigger"><span></span><span></span><span></span></button>
    <nav id="main-nav-desktop">
        <ul>
            <li>
              <a class="has-children" href="/album/">Discografia</a>
              <ul class="sub-nav">
                <li><a href="/album/">Albums</a></li>
                <li><a href="/track/">Musicas</a></li>
                <li><a href="/video/">Videos</a></li>
                <li><a href="/dvd/">DVDs</a></li>
              </ul>
            </li>
            <li>
              <a class="has-children" href="/tour/">Tour</a>
              <ul class="sub-nav">
                <li><a href="/tour?scope=upcoming">Na Estrada</a></li>
               <!--  <li><a href="/tour?scope=archive">Arquivo</a></li> -->
              </ul>
            </li>
            <li><a href="/beygood/">#Biografia</a></li>
            <li><a href="/fragrance/">#GIG</a></li>
            <li><a href="http://shop.beyonce.com/" target="_blank">Contato</a></li>
        </ul>
    </nav>
    <div id="nav-utilities-desktop">
        <a id="secondary-brand-desktop" class="retract-nav" href="/"><img src="{{ url::asset ('img/elba/whitenome.svg') }}" alt="elba"></a>
        <div id="search-wrapper-desktop">
            <form id="global-search" method="post">
              <input type="text" value="">
              <button type="submit" class="icon-search"><img src="{{  url::asset('img/elba/icon-search.svg') }}" alt="Search"></button>
            </form>
        </div>
    </div>
    <div id="addtl-links-desktop">
        <ul id="legal-desktop">
            <li><a class="retract-nav" href="/signup/">Join</a></li>
            <li><a class="retract-nav" href="/follow/">Social</a></li>
            <li><a class="retract-nav" href="/termos e condi    es/">Termos</a></li>
            <li><a class="retract-nav" href="/politica/">Politica</a></li>
        </ul>
    </div>
</div>
<div id="nav-mobile">
    <nav id="main-nav-mobile">
        <ul>
            <li><a href="/album/">Albums</a></li>
            <li><a href="/tour/">Musicas</a></li>
            <li><a href="/beygood/">#Biografia</a></li>
            <li><a href="/fragrance/">Gig</a></li>
            <li><a href="http://shop.beyonce.com/" target="_blank">Contato</a></li>
        </ul>
    </nav>
    <div id="nav-utilities-mobile">
        <div id="search-wrapper-mobile">
            <form id="global-search-mobile" method="post">
              <input type="text" value="">
              <button type="submit" class="icon-search"><img src="imgs/elba/icon-search.svg" alt="Search"></button>
            </form>
        </div>
    </div>
    <div id="addtl-links-mobile">
        <ul id="legal-mobile">
            <li><a class="retract-nav-mobile" href="/signup/">Join</a></li>
            <li><a class="retract-nav-mobile" href="/follow/">Follow</a></li>
            <li><a class="retract-nav-mobile" href="/terms-conditions/">Terms</a></li>
            <li><a class="retract-nav-mobile" href="/privacy-policy/">Privacy</a></li>
        </ul>
    </div>
</div>



ioioioi






<div id="zoom-overlay"></div> 

<div id="zoom-lb">
  <button id="image-zoom-close"><img src="images/icon-close.svg" alt="Close"></button>
  <img class="expanded-img" src="" alt="">
</div>
<script src="{{ URL::asset('js/app.js') }}"></script>

<!-- <script src="{{ URL::asset('public/js/app.js') }}"></script> -->
<!--   <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script> -->
<!--   <script src='http://rawgithub.com/desandro/masonry/v2.1.08/jquery.masonry.js'></script>
  <script src='http://imagesloaded.desandro.com/imagesloaded.pkgd.js'></script> -->
  
<!--   <script src="js/mansory_jquery.js"></script> -->

  <script type="text/javascript" language="javascript">
var isReadyForTheJelly = function($) {
    window.siteUrl = 'http://www.elbaramalho.com.br';
    // window.ajaxUrl = 'http://www.elbaramalho.com.br/wp-admin/admin-ajax.php';
    // window.templateUrl = 'http://static.parkwoodent.netdna-cdn.com/wp-content/themes/elba_2014';
    var
      opts = {
        siteUrl : 'http://www.elbaramalho.com.br',
        // ajaxUrl : 'http://www.beyonce.com/wp-admin/admin-ajax.php',
        // templateUrl : 'http://static.parkwoodent.netdna-cdn.com/wp-content/themes/elba_2014',
        ajaxContainer : '#main',
        splashView : 0
      };
    // Create the beyonce app as the global var "beyonce"
    window.beyonce = new App(opts);
};
// Check if jQuery is ready for the jelly?
jQuery(isReadyForTheJelly());
</script>


</body>

</html>