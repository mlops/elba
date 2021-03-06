@extends('layout.master')
@section('title', '/////#Elba Ramalho ')@stop
@section('head-script')
    @parent
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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
    </style>
@stop


@section('content')

<div id="myCarousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                  <img src="{{ URL::to(Config::get('caminho.server_public').'/images/el01.jpg') }}">
                  <div class="carousel-caption row">
                    <div class="span7 caption">
                      <p><a href="{{ URL::to('/news/3') }}">Novo disco conta com participação especial de Chico César</a></p>
                    </div>
                    
            {{--         <div class="span2 action">
                      <a class="btn btn-info pull-right" href="http://lebonheur.org/our-services/emergency-medicine/">Emergency Medicine</a>
                    </div> --}}
                  </div>
                </div>
                <!-- /end item1 -->
                
                <div class="item">
                  <img src="{{ URL::to(Config::get('caminho.server_public').'/images/el05.jpg') }}">
                  <div class="carousel-caption row">
                    <div class="span7 caption">
                    <p><a href="{{ URL::to('/news/4') }}">Novo   lbum traz a cantora portuguesa Carminho em dueto com Elba</a></p>
                    </div>
                    
             {{--        <div class="span2 action">
                      <a class="btn btn-info pull-right" href="http://lebonheur.org/our-services/Diagnostics-Radiology-Pathology-and-Lab-Services/">Radiology Department</a>
                    </div> --}}
                  </div>
                </div>
                <!-- /end item2 -->
               
                <div class="item">
                   <img src="{{  URL::to(Config::get('caminho.server_public').'/images/vitrine03.jpg')  }}">
                   <div class="carousel-caption row">
                     <div class="span7 caption">
                       <p><a href="{{ URL::to('/news/5') }}">&quot; Olhando o Cora    o &quot; re  ne a m  sica de Dominguinhos e DJ Dolores</a></p>
                     </div>
                     
             {{--         <div class="span2 action">
                       <a class="btn btn-info pull-right" href="http://lebonheur.org/our-services/emergency-medicine/">Emergency Medicine</a>
                     </div> --}}
                   </div>
                </div>

                <!-- /end item3 -->
                   <div class="item">
           
                     <p id="youtube-player">    <iframe id="video" width="1200" height="547" src="https://www.youtube.com/embed/1bTUYUFCOKk?autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
                      <div class="carousel-caption row">

                        <div class="span7 caption">
                          <p><a href="">Elba Ramalho: Estreia da Turn   "Do Meu Olhar Pra Fora"</a></p>
                        </div>

                        
                {{--         <div class="span2 action">
                          <a class="btn btn-info pull-right" href="http://lebonheur.org/our-services/emergency-medicine/">Emergency Medicine</a>
                        </div> --}}
                      </div>
                   </div>

                   <div class="item">
                  
                     <p id="youtube-player"><iframe id="video" width="1200" height="547" src="https://www.youtube.com/embed/-C6MgvcXbTY?autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
                      <div class="carousel-caption row">

                        <div class="span7 caption">
                          <p><a href="">Elba Ramalho e Carminho: &quot;Nos Ares de Lisboa/Um Passarinho Enganador&quot;</a></p>
                        </div>

                        
                {{--         <div class="span2 action">
                          <a class="btn btn-info pull-right" href="http://lebonheur.org/our-services/emergency-medicine/">Emergency Medicine</a>
                        </div> --}}
                      </div>
                   </div>
                   <!-- /end item4 -->
                      <div class="item">
                     
                        <p id="youtube-player"><iframe id="video" width="1200" height="547" src="https://www.youtube.com/embed/QmUMYrX5SSc?autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
                         <div class="carousel-caption row">

                           <div class="span7 caption">
                             <p><a href="">Lu  , produtor e filho de Elba Ramalho, fala sobre novo disco</a></p>
                           </div>

                           
                   {{--         <div class="span2 action">
                             <a class="btn btn-info pull-right" href="http://lebonheur.org/our-services/emergency-medicine/">Emergency Medicine</a>
                           </div> --}}
                         </div>
                      </div>

                      <!-- /end item5 -->
              <!-- Carousel nav -->
              <a class="carousel-control left " href="#myCarousel" data-slide="prev">   </a>
              <a class="carousel-control right " href="#myCarousel" data-slide="next">   </a>
            </div>


<section class="news-wrap">

    <header class="news-header">
        <div class="titulo"><h2>NOT  CIAS</h2></div>
        <span class="chamada">Clique e confira as   ltimas not  cias da artista!</span>
    </header>
                 <ul class="grid">
                     <li class="title-box">
           <a href="{{ URL::to('/news/1') }}">
                     <img class="lazy img-responsive"
                     data-original="{{  URL::to(Config::get('caminho.server_public').'/images/elb01.jpg') }} "
                     src="{{URL::to(Config::get('caminho.server_public').'/images/elb01.jpg') }}">
                         <h3 class="hvr-underline-from-left">
                            Do meu olhar pra fora   , novo CD de Elba Ramalho, j   est   nas lojas e em todas as plataformas digitais.
                         </h3>
    </a>
                     </li>

                     <li class="title-box">
                <a href="{{ URL::to('/news/2') }}">
                         <img class="lazy img-responsive"
                         data-original="{{ URL::to(Config::get('caminho.server_public').'/images/elb03.jpg') }}"
                         src="{{ URL::to(Config::get('caminho.server_public').'/images/elb03.jpg') }}">
                         <h3  class="hvr-underline-from-left">
                         O disco tem 4 can    es de Dominguinhos, sendo 3 in  ditas:    Olhando o cora    o    e a dobradinha    Nos ares de Lisboa/Um passarinho enganador   
                         </h3>
                </a>
                     </li>
                     <li class="title-box">
            <a href="{{ URL::to('/news/6') }}">
                     <img class="lazy img-responsive"
                     data-original="{{ URL::to(Config::get('caminho.server_public').'/images/elb06.jpg') }}"
                     src="{{ URL::to(Config::get('caminho.server_public').'/images/elb06.jpg') }}">
                         <h3  class="hvr-underline-from-left">
                              rvore   , cl  ssico do reggae nacional,    a primeira m  sica de trabalho, sendo que j      uma das mais pedidas na r  dio MPB/FM do Rio.
                         </h3>
            </a>
                     </li>
                     <li class="title-box">
        <a href="{{ URL::to('/news/7') }}">
                     <img class="lazy img-responsive"
                     data-original="{{ URL::to(Config::get('caminho.server_public').'/images/elb07.jpg') }} "
                     src="{{ URL::to(Config::get('caminho.server_public').'/images/elb07.jpg')  }}">
                         <h3  class="hvr-underline-from-left">
                         Neste novo trabalho, Elba voltou a gravar em franc  s. Desta vez, uma dolente can    o sobre separa    o:    La noy  e   .
                         </h3>
            </a>
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
               <a href ="http://www.elbaramalho.com.br/disco/do_meu_olhar_pra_fora">   
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
        <h3>Vambora L   Dan  ar</h3>
        <p>&nbsp;</p>
    </div>

    <div class="album-cover">
      <div class="hvr-float-shadow"> 
       <a href ="http://www.elbaramalho.com.br/disco/vambora_la_dancar">   
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
         <a href ="http://www.elbaramalho.com.br/disco/marco_zero">   
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
           <a href ="http://www.elbaramalho.com.br/disco/balaio_de_amor">   
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
           <a href ="http://www.elbaramalho.com.br/disco/qual_assunto_que_mais_lhe_interessa">   
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
           <a href ="http://www.elbaramalho.com.br/disco/elba_e_dominguinhos">   
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
                    <span class="col-lg-1 date-date" itemprop="startDate" content="28.08">28.08
                    </span>

                    <span class="col-lg-3 date-city">S  O JO  O DO CERRADO
                    </span>

                    <span class="col-lg-2 date-estado">DF
                    </span>

                    <span class="col-lg-4 date-name">CEIL  NDIA
                    </span>

                </div>

                <div class="date">
                    <span class="col-lg-1 date-date" itemprop="startDate" content="05.09">05.09
                    </span>

                    <span class="col-lg-3 date-city">PROJETO KALUNGA 35 ANOS
                    </span>

                    <span class="col-lg-2 date-estado">  FRICA 
                    </span>

                    <span class="col-lg-4 date-name">ANGOLA
                    </span>

                </div>

                <div class="date">
                    <span class="col-lg-1 date-date" itemprop="startDate" content="07.09">07.09
                    </span>

                      <span class="col-lg-3 date-city">PROJETO KALUNGA 35 ANOS
                      </span>

                      <span class="col-lg-2 date-estado">  FRICA 
                      </span>

                      <span class="col-lg-4 date-name">ANGOLA
                      </span>

                </div>
                <div class="date">
                    <span class="col-lg-1 date-date" itemprop="startDate" content="09.09">09.09
                    </span>

                    <span class="col-lg-3 date-city">PROJETO KALUNGA 35 ANOS
                    </span>

                    <span class="col-lg-2 date-estado">  FRICA 
                    </span>

                    <span class="col-lg-4 date-name">ANGOLA
                    </span>

                </div>

        <div class="date">
            <span class="col-lg-1 date-date" itemprop="startDate" content="11.09">11.09
            </span>

            <span class="col-lg-3 date-city">ELBA E BANDA
            </span>

            <span class="col-lg-2 date-estado">PI
            </span>

            <span class="col-lg-4 date-name">TERESINA (THERESINA HALL)
            </span>

        </div>
    <div class="date">
        <span class="col-lg-1 date-date" itemprop="startDate" content="12.09">12.09
        </span>

        <span class="col-lg-3 date-city">ELBA E BANDA 
        </span>

        <span class="col-lg-2 date-estado">PI 
        </span>

        <span class="col-lg-4 date-name">BOM JESUS
        </span>

    </div>
    <div class="date">
        <span class="col-lg-1 date-date" itemprop="startDate" content="19.09">19.09
        </span>

        <span class="col-lg-3 date-city">ELBA E BANDA
        </span>

        <span class="col-lg-2 date-estado">SP
        </span>

        <span class="col-lg-4 date-name">S  O CAETANO DO SUL (ESPA  O VERDE CHICO MENDES)
        </span>

    </div>
        <div class="date">
            <span class="col-lg-1 date-date" itemprop="startDate" content="26.09">26.09
            </span>

            <span class="col-lg-3 date-city">ELBA E BANDA
            </span>

            <span class="col-lg-2 date-estado">BA
            </span>

            <span class="col-lg-4 date-name">SALVADOR (ARENA FONTE NOVA)
            </span>

        </div>
        <div class="date">
            <span class="col-lg-1 date-date" itemprop="startDate" content="03.10">03.10
            </span>

            <span class="col-lg-3 date-city">ELBA E BANDA
            </span>

            <span class="col-lg-2 date-estado">SP
            </span>

            <span class="col-lg-4 date-name">INDAIATUBA
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
                <a href="https://instagram.com/p/6vsxZDoYXF/?taken-by=elbaramalho" target="_blank">
                <img class="lazy img-responsive" 
                data-original="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11850055_1647856722127257_1087196409_n.jpg') }}" 
                src="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11850055_1647856722127257_1087196409_n.jpg') }}" alt="instagram">
                </a>
            </figure>

            <figure class="effect-lily2 hvr-underline-from-left">
                <a href="https://instagram.com/p/6vhkZ3IYfU/?taken-by=elbaramalho" target="_blank">
                <img class="lazy img-responsive" 
                data-original="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11375778_1481726862149776_338948149_n.jpg') }}" 
                src="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11375778_1481726862149776_338948149_n.jpg') }}" alt="instagram">
                </a>
            </figure>

            <figure class="effect-lily3 hvr-underline-from-left">
                <a href="https://instagram.com/p/6oVMp6IYWT/?taken-by=elbaramalho" target="_blank">
                <img class="lazy img-responsive" 
                data-original="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11324342_615179458584418_110573230_n.jpg') }}" 
                src="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11324342_615179458584418_110573230_n.jpg') }}" alt="instagram">
                </a>
            </figure>

            <figure class="effect-lily4 hvr-underline-from-left">
                <a href="https://instagram.com/p/6lx-FeoYWn/?taken-by=elbaramalho" target="_blank">
                <img class="lazy img-responsive" 
                data-original="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11909428_623130757828921_509191897_n.jpg') }}" 
                src="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11909428_623130757828921_509191897_n.jpg') }}" alt="instagram">
                </a>
            </figure>

{{--             <figure class="effect-lily2 hvr-underline-from-left">
                <a href="https://instagram.com/p/4N1rN8oYfb/?taken-by=elbaramalho" target="_blank">
                <img class="lazy img-responsive" 
                data-original="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11375767_1463032000674232_1222759391_n.jpg') }}" 
                src="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11375767_1463032000674232_1222759391_n.jpg') }}" alt="instagram">
                </a>
            </figure>

            <figure class="effect-lily3 hvr-underline-from-left">
                <a href="https://instagram.com/p/4NQoGYIYSi/?taken-by=elbaramalho" target="_blank">
                <img class="lazy img-responsive" 
                data-original="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11376605_1595275264094106_951344290_n.jpg') }}" 
                src="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11376605_1595275264094106_951344290_n.jpg') }}" alt="instagram">
                </a>
            </figure>

            <figure class="effect-lily4 hvr-underline-from-left">
                <a href="https://instagram.com/p/4KM4k6IYV3/?taken-by=elbaramalho" target="_blank">
                <img class="lazy img-responsive" 
                data-original="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11380177_1587515191505002_1901964481_n.jpg') }}" 
                src="{{ URL::to(Config::get('caminho.server_public').'/images/instagram/11380177_1587515191505002_1901964481_n.jpg') }}" alt="instagram">
                </a>
            </figure>
 --}}

            </div>
    </div>


</section>



@stop

@section('script-js')
<script type="text/javascript">

 // <![CDATA[
 //
var $ = jQuery.noConflict();

$(document).ready(function()  {
    $('#myCarousel').carousel(
        { interval: 3000, 
            cycle: true,
            pause: "hover"
        });
/*scroll agenda*/
    $("a[href^='#']").click(function(e){
        $("body, html").stop().animate({scrollTop:$(this.hash).offset().top - 80}, 1000);
        e.preventDefault();
    });

     $("#myCarousel").swiperight(function() {  
                  $(this).carousel('prev');  
                    });  
               $("#myCarousel").swipeleft(function() {  
                  $(this).carousel('next');  
           });


});

</script>





@stop

