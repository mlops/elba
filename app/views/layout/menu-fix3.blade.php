<div id="fixedbar">
<div class="nav-container">
    <div class="wrap-fixed">
        <a href="/" class="logo"><img src="{{ URL::to(Config::get('caminho.server_public').'/images/logo1.png')  }}" alt="Logo Elba" /></a>
             <div class="social">
                <ul class="social-nav">
                    <li class="social-nav--item table-item"><a href="https://www.facebook.com/ElbaRamalhoOficial" class="fa fa-facebook" target="blank" ></a></li>
                    <li class="social-nav--item table-item"><a href="https://twitter.com/elbaramalho" class="fa fa-twitter"  target="blank" ></a></li>
                    <li class="social-nav--item table-item"><a href="https://www.youtube.com/user/elbaramalho" class="fa fa-youtube"  target="blank" ></a></li>
                    <li class="social-nav--item table-item"><a href="https://instagram.com/elbaramalho/" class="fa fa-instagram"  target="blank" ></a></li>
                    <li class="social-nav--item table-item"><a href="https://www.flickr.com/photos/elbaramalho/" class="fa fa-flickr"  target="blank" ></a></li>
                </ul>
            </div> <!-- fim social -->
            <div class="menu-mobile-toggle c-hamburger--htx">
                  <span></span>
            </div><!-- fim  mobile -->
        <nav class="main-nav">
            <ul class="main-nav-menu table-item">
                <li class="main-nav-menu-item table-item"><a class="biografia" href="{{ URL::to('/biografia/') }}">BIOGRAFIA</a></li>
                <li class="main-nav-menu-item table-item"><a class="menu" href="{{ URL::to('/news/') }}">NOTÍCIAS</a></li>
                <li class="main-nav-menu-item table-item"><a class="menu" href="#agenda">AGENDA</a></li>
                <li class="main-nav-menu-item table-item"><a class="midias" href="{{ URL::to('/midias/') }}">DISCOGRAFIA</a></li>
                <li class="main-nav-menu-item table-item"><a class="menu" href="{{ URL::to('/albuns
                /') }}">FOTOS</a></li>
                <li class="main-nav-menu-item table-item"><a class="menu" href="{{ URL::to('/contato/') }}">CONTATO</a></li>
            </ul>
        </nav><!-- fim  main Nav -->
     </div><!-- fim  wrap -->

 </div><!-- fim  nav-container -->
</div><!-- fim  fix-bar -->