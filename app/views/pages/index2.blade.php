@extends('layout.master')
@section('title', '/////#Elba Ramalho ')@stop
@section('head-script')
 @parent

  {{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') }}
  {{ HTML::script('http://www.appelsiini.net/projects/lazyload/jquery.lazyload.js') }}

 
 <script type="text/javascript">
 $(function() {
   $("img.lazy").lazyload({
       effect : "fadeIn"
   });
 });
 </script>

    <style>
    #youtube-player{max-width:100%!important}
   .carousel-fade .carousel-inner .item {
     opacity: 0;
     -webkit-transition-property: opacity;
     -moz-transition-property: opacity;
     -o-transition-property: opacity;
     transition-property: opacity;
   }
   .carousel-fade .carousel-inner .active {
     opacity: 1;
   }
   .carousel-fade .carousel-inner .active.left,
   .carousel-fade .carousel-inner .active.right {
     left: 0;
     opacity: 0;
     z-index: 1;
   }
   .carousel-fade .carousel-inner .next.left,
   .carousel-fade .carousel-inner .prev.right {
     opacity: 1;
   }
   .carousel-fade .carousel-control {
     z-index: 2;
   }

    </style>
@stop


@section('content')

<div id="myCarousel" class="carousel slide carousel-fade">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                  <img src="{{ URL::to(Config::get('caminho.server_public').'/images/ciclo/ciclo_01-min.jpg') }}">
                </div>
                <!-- /end item1 -->
                <div class="item">
                  <img src="{{ URL::to(Config::get('caminho.server_public').'/images/ciclo/ciclo_02-min.jpg') }}">
                </div>
                <!-- /end item2 -->
                <div class="item">
                   <img src="{{  URL::to(Config::get('caminho.server_public').'/images/ciclo/ciclo_03-min.jpg')  }}">
                </div>
                <!-- /end item3 -->
                <div class="item">
                   <img src="{{  URL::to(Config::get('caminho.server_public').'/images/ciclo/ciclo_04-min.jpg')  }}">
                </div>
                <div class="item">
                   <img src="{{  URL::to(Config::get('caminho.server_public').'/images/ciclo/ciclo_05-min.jpg')  }}">
                </div>
              <!-- Carousel nav -->
{{--               <a class="carousel-control left " href="#myCarousel" data-slide="prev">   </a>
              <a class="carousel-control right " href="#myCarousel" data-slide="next">   </a> --}}
</div>


<section class="news-wrap">

    <header class="news-header">
        <div class="titulo"><h2>NOTÍCIAS</h2></div>
        <span class="chamada">Clique e confira as últimas notícias da artista!</span>
    </header>
        <ul class="grid">
        <li class="title-box"><a href="{{ URL::to('/news/9') }}">
                            <img class="lazy img-responsive"
                            data-original="{{  URL::to(Config::get('caminho.server_public').'/images/news/vitrine09a.jpg') }} "
                            src="{{URL::to(Config::get('caminho.server_public').'/images/news/vitrine09a.jpg') }}">
                                <h3 class="hvr-underline-from-left">
                                Vem aí o novo DVD de Elba: show “Cordas, Gonzaga e Afins”.
                             </h3></a>
         </li>
         <li class="title-box"><a href="{{ URL::to('/news/8') }}">
                             <img class="lazy img-responsive"
                             data-original="{{  URL::to(Config::get('caminho.server_public').'/images/news/vitrine08a.jpg') }} "
                             src="{{URL::to(Config::get('caminho.server_public').'/images/news/vitrine08a.jpg') }}">
                                 <h3 class="hvr-underline-from-left">
                                 Elba é capa da edição sobre o Outubro Rosa da revista da Gol Linhas Aéreas Inteligentes.
                              </h3></a>
          </li>
          

         <li class="title-box"><a href="{{ URL::to('/news/1') }}">
                    <img class="lazy img-responsive"
                    data-original="{{  URL::to(Config::get('caminho.server_public').'/images/news/elb01.jpg') }} "
                    src="{{URL::to(Config::get('caminho.server_public').'/images/news/elb01.jpg') }}">
                        <h3 class="hvr-underline-from-left">
                        “Do meu olhar pra fora”, novo CD de Elba Ramalho, já está nas lojas e em todas as plataformas digitais.
                        </h3></a>
         </li>

         <li class="title-box"><a href="{{ URL::to('/news/2') }}">
                     <img class="lazy img-responsive"
                      data-original="{{ URL::to(Config::get('caminho.server_public').'/images/news/elb03.jpg') }}"
                      src="{{ URL::to(Config::get('caminho.server_public').'/images/news/elb03.jpg') }}">
                        <h3  class="hvr-underline-from-left">
                        O disco tem 4 canções de Dominguinhos, sendo 3 inéditas: “Olhando o coração” e a dobradinha “Nos ares de Lisboa/Um passarienganador”
                        </h3></a>
                      </li>
                 </ul>
</section>

<section class="wrap-discos">
    <header>
        <div class="titulo"><h2>DISCOS</h2></div>
    </header>

    <div class="container">
        <div class="product">
            <div class="product-description">
                <p>2015</p>
                <h3 >Do Meu Olhar Pra Fora</h3>
                <p>&nbsp;</p>
            </div>

            <div class="album-cover">
              <div class="hvr-float-shadow"> 
               <a href ="http://www.elbaramalho.com.br/discos/do_meu_olhar_pra_fora">   
                 <img class="lazy img-responsive" 
                 data-original="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd32.jpg') }} " 
                 src="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd32.jpg') }}" alt="Do Meu Olhar">
             </a>
         </div>
     </div>

 </div>
 <div class="product">
    <div class="product-description">
        <p>2013</p>
        <h3>Vambora Lá Dançar</h3>
        <p>&nbsp;</p>
    </div>

    <div class="album-cover">
      <div class="hvr-float-shadow"> 
       <a href ="http://www.elbaramalho.com.br/discos/vambora_la_dancar">   
        <img class="lazy img-responsive"
        data-original="{{ URL::to(Config::get('caminho.server_public').'images/capas/cd31.jpg') }}"
        src="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd31.jpg') }}" alt="VamoBora La Dan  ar">
    </a>
</div>
</div>

</div>
<div class="product">
    <div class="product-description">
        <p>2010</p>
        <h3>Marco Zero Ao Vivo</h3>
        <p>&nbsp;</p>
    </div>

    <div class="album-cover">
        <div class="hvr-float-shadow"> 
         <a href ="http://www.elbaramalho.com.br/discos/marco_zero">   
            <img class="lazy img-responsive" 
            data-original="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd30.jpg') }} " 
            src="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd30.jpg') }}" alt="Marco Zero Ao Vivo">
        </a>
    </div>
</div>
</div>
<div class="product">
    <div class="product-description">
        <p>2009</p>
        <h3>Balaio De Amor</h3>
        <p>&nbsp;</p>
    </div>

    <div class="album-cover">
        <div class="hvr-float-shadow"> 
           <a href ="http://www.elbaramalho.com.br/discos/balaio_de_amor">   
            <img class="lazy img-responsive" 
            data-original="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd29.jpg') }}" 
            src="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd29.jpg') }}" alt="Balaio De Amor">
        </a>
    </div>
</div>
</div>
<div class="product">
    <div class="product-description">
        <p>2007</p>
        <h3>Qual Assunto Que Mais Lhe Interessa</h3>
        <p>&nbsp;</p>
    </div>

    <div class="album-cover">
        <div class="hvr-float-shadow"> 
           <a href ="http://www.elbaramalho.com.br/discos/qual_assunto_que_mais_lhe_interessa">   
            <img class="lazy img-responsive" 
            data-original="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd28.jpg') }}" 
            src="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd28.jpg') }}" alt="Qual Assunto Que Mais Lhe Interessa">
        </a>
    </div>
</div>
</div>
<div class="product">
    <div class="product-description">
        <p>2005</p>
        <h3>Elba e Dominguinhos</h3>
        <p>&nbsp;</p>
    </div>

    <div class="album-cover">
        <div class="hvr-float-shadow"> 
           <a href ="http://www.elbaramalho.com.br/discos/elba_e_dominguinhos">   
            <img class="lazy img-responsive" 
            data-original="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd27.jpg') }}" 
            src="{{ URL::to(Config::get('caminho.server_public').'/images/capas/cd27.jpg') }}" alt="Balaio De Amor">
        </a>
    </div>
</div>
</div>
</div>

</section>

<section id="agenda" class="wrap-agenda">
    <div class="table-wrapper">
    <div class="table-cell-wrapper">
    <div class="cover-container">
    <div class="container">
        <div class="row">
            <div class="title-wrapper">
            <h2 class="section-title">agenda</h2>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-offset-0 listagem-eventos">

                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="30.10">30.10
                          </span>

                          <span class="col-lg-3 date-city">ELBA E BANDA
                          </span>

                          <span class="col-lg-2 date-estado">BA
                          </span>

                          <span class="col-lg-4 date-name">LAURO DE FREITAS (Armazém Vilas)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="31.10">31.10
                          </span>

                          <span class="col-lg-3 date-city">ELBA E BANDA
                          </span>

                          <span class="col-lg-2 date-estado">BA
                          </span>

                          <span class="col-lg-4 date-name">RIO DE CONTAS (Praça do Landim, 3º Festival da Primavera)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="01.11">01.11
                          </span>

                          <span class="col-lg-3 date-city">PARTICIPAÇÃO TV CANÇÃO NOVA
                          </span>

                          <span class="col-lg-2 date-estado">SP
                          </span>

                          <span class="col-lg-4 date-name">SÃO PAULO
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="05.11">05.11
                          </span>

                          <span class="col-lg-3 date-city">SHOW BENEFICENTE PELA IGREJA MATRIZ DE SÃO GERALDO
                          </span>

                          <span class="col-lg-2 date-estado">RJ
                          </span>

                          <span class="col-lg-4 date-name">RIO DE JANEIRO (Ginásio do Olaria)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="08.11">08.11
                          </span>

                          <span class="col-lg-3 date-city">ELBA E BANDA
                          </span>

                          <span class="col-lg-2 date-estado">PI
                          </span>

                          <span class="col-lg-4 date-name">SÃO JOÃO DO PIAUÍ (5º Festival da Uva)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="13.11">13.11
                          </span>

                          <span class="col-lg-3 date-city">ELBA E BANDA 
                          </span>

                          <span class="col-lg-2 date-estado">CE
                          </span>

                          <span class="col-lg-4 date-name">CRATO (Circuito SESC)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="14.11">14.11
                          </span>

                          <span class="col-lg-3 date-city">ELBA E BANDA 
                          </span>

                          <span class="col-lg-2 date-estado">CE
                          </span>

                          <span class="col-lg-4 date-name">BARBALHA (Circuito SESC)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="15.11">15.11
                          </span>

                          <span class="col-lg-3 date-city">ELBA E BANDA 
                          </span>

                          <span class="col-lg-2 date-estado">CE
                          </span>

                          <span class="col-lg-4 date-name">AURORA (Circuito SESC)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="17.11">17.11
                          </span>

                          <span class="col-lg-3 date-city">SHOW COLETIVO BENEFICENTE HOSPITAL DO CÂNCER 
                          </span>

                          <span class="col-lg-2 date-estado">PE
                          </span>

                          <span class="col-lg-4 date-name">RECIFE (Teatro Guararapes)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="19.11">19.11
                          </span>

                          <span class="col-lg-3 date-city">SHOW BENEFICENTE TV APARECIDA
                          </span>

                          <span class="col-lg-2 date-estado">SP
                          </span>

                          <span class="col-lg-4 date-name">APARECIDA DO NORTE
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="23.11">23.11
                          </span>

                          <span class="col-lg-3 date-city">ELBA E MARIA BETHÂNIA - SHOW BENEFICENTE PARÓQUIA DE SÃO CONRADO
                          </span>

                          <span class="col-lg-2 date-estado">RJ
                          </span>

                          <span class="col-lg-4 date-name">RIO DE JANEIRO (Teatro Oi Casagrande)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="24.11">24.11
                          </span>

                          <span class="col-lg-3 date-city">PARTICIPAÇÃO GRAVAÇÃO DVD PADRE FÁBIO DE MELO
                          </span>

                          <span class="col-lg-2 date-estado">RJ
                          </span>

                          <span class="col-lg-4 date-name">RIO DE JANEIRO (Teatro Municipal)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="26.11">26.11
                          </span>

                          <span class="col-lg-3 date-city">POCKET SHOW FESTIVAL DA LUA CHEIA
                          </span>

                          <span class="col-lg-2 date-estado">RJ
                          </span>

                          <span class="col-lg-4 date-name">RIO DE JANEIRO (Village Mall/Barra da Tijuca)
                          </span>

                      </div>
                      <div class="date">
                          <span class="col-lg-1 date-date" itemprop="startDate" content="27.11">27.11
                          </span>

                          <span class="col-lg-3 date-city">ELBA 35 ANOS
                          </span>

                          <span class="col-lg-2 date-estado">RJ
                          </span>

                          <span class="col-lg-4 date-name">RIO DE JANEIRO (Centro Cultural João Nogueira/Imperator)
                          </span>

                      </div>

                  </div> <!-- fim listagem-eventos  -->
                  </div><!-- row  -->
                  </div>
              </section>



              <section class="wrap-instagram">

                          <header class="title-wrapper">
                              <h2 class="section-title">instagram</h2>
                          </header>
                 
                  <div class="grid-instagram">

                          <div class="devcenter">

                          <figure class="effect-lily1 hvr-underline-from-left">
                          <a href="https://instagram.com/p/9dyuTcIYeM/?taken-by=elbaramalho" target="_blank">
                          <img class="lazy img-responsive" 
                          data-original="https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/s640x640/sh0.08/e35/12070961_830411550405207_1956152591_n.jpg"
                          src="https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/s640x640/sh0.08/e35/12070961_830411550405207_1956152591_n.jpg" alt="instagram">
                          </a>
                          </figure>
                          <figure class="effect-lily2 hvr-underline-from-left">
                          <a href="https://instagram.com/p/8SvR64IYWQ/?taken-by=elbaramalho" target="_blank">
                          <img class="lazy img-responsive" 
                          data-original="https://igcdn-photos-f-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/e35/11311615_1631272763781661_416864611_n.jpg" 
                          src="https://igcdn-photos-f-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/e35/11311615_1631272763781661_416864611_n.jpg" alt="instagram">
                          </a>
                          </figure>

                          <figure class="effect-lily3 hvr-underline-from-left">
                          <a href="https://instagram.com/p/8OpO6ioYdq/?taken-by=elbaramalho" target="_blank">
                          <img class="lazy img-responsive" 
                          data-original="https://igcdn-photos-a-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/s640x640/sh0.08/e35/12063170_174592666217688_1466190107_n.jpg" 
                          src="https://igcdn-photos-a-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/s640x640/sh0.08/e35/12063170_174592666217688_1466190107_n.jpg" alt="instagram">
                          </a>
                          </figure>

                          <figure class="effect-lily4 hvr-underline-from-left">
                              <a href="https://instagram.com/p/9RhvjyIYSv/?taken-by=elbaramalho" target="_blank">
                              <img class="lazy img-responsive" 
                              data-original="https://igcdn-photos-a-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/s640x640/sh0.08/e35/11236035_933316943400952_1370211461_n.jpg" 
                              src="https://igcdn-photos-a-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/s640x640/sh0.08/e35/11236035_933316943400952_1370211461_n.jpg" alt="instagram">
                              </a>
                          </figure>

                          </div>
                  </div>


              </section>



@stop

@section('script-js')
<script type="text/javascript">

$(function() {
  var $ = jQuery.noConflict();

// menu mobile
$('.menu-mobile-toggle').click(function() {
    $('ul.main-nav-menu').slideToggle();
})
$(window).resize(function(){
  if ( $(window).width() > 400) {
    $('ul.main-nav-menu').removeAttr('style');
    }
});
//fim menu mobile
//
$('#myCarousel').carousel(
      { interval: 5000, 
        cycle: true,
        pause: "hover"
});

// /*scroll agenda*/
//   $("a[href^='#']").click(function(e){
//       $("body, html").stop().animate({scrollTop:$(this.hash).offset().top - 80}, 1000);
//       e.preventDefault();
//   });

// $(window).load(function() {
//     // Animate loader off screen
//     $(".se-pre-con").fadeOut("slow");
// });


  })
</script>
@stop
