@extends('layout.master')
@section('title', '/////#Elba Ramalho - Discos ')@stop
@section('head-script')
@parent
<script type="text/javascript">

</script>  
@stop
@section('content')

<section id="post" class="section-container post-permalink">
    <div class="permalink-container">
        <header class="post-header">
            <h2>O disco tem 4 can    es de Dominguinhos, sendo 3 in  ditas:    Olhando o cora    o    e a dobradinha    Nos ares de Lisboa/Um passarinho enganador   </h2>
            <p class="post-date">Publicado: 28/03/2015</p>
            </header>

            <div class="post-thumb">
                <img src="{{  URL::to(Config::get('caminho.server_public').'/images/elb03.jpg') }}" alt="My Life">        </div>
                <div class="post-body">
                </div>
                <footer class="post-footer">
                    <div class="post-txt">
                        <ul>
                            <li><p class="materia">Das 12 m  sicas que integram    Do meu olhar pra fora   , novo trabalho de Elba Ramalho, quatro carregam a assinatura de Dominguinhos. Al  m do cl  ssico    Contrato de separa    o   , composta pelo artista em parceria com Anast  cia, Elba apresenta tr  s can    es in  ditas. A primeira delas, a faixa de abertura,    o cart  o de vistas do disco:    Olhando o cora    o   , parceria com o poeta Clim  rio, que traz um arranjo que remete ao balan  o de ritmos como xote e bai  o, mas com uma pegada pop/contempor  nea. A dobradinha    Nos ares de Lisboa / Um passarinho enganador   , letrada por Fausto Nilo, conta com a participa    o especial  ssima da nova estrela da m  sica portuguesa Carminho. Mostra que a obra de Elba, assim como a de Dominguinhos, cruza as fronteiras dos oceanos r  tmicos.
</p></li>
                            <li><p class="materia"><br>
                            <p class="materia"></p></p></li>
                            <li></li>
                            <li><p class="post-comprar-btn"></p></li>
                            <li><p class="chamada-itunes"><iframe width="640" height="360" src="https://www.youtube.com/embed/jYNxEY9uBxc" frameborder="0" allowfullscreen></iframe></p></li>
                            <li><p class="chamada-itunes"><iframe width="640" height="360" src="https://www.youtube.com/embed/-aVrHg4MOto" frameborder="0" allowfullscreen></iframe></p></li>
                            <li><p class="chamada-itunes"><iframe width="640" height="360" src="https://www.youtube.com/embed/YqsLQxKHHgw" frameborder="0" allowfullscreen></iframe></p></li>
                        </ul>
                        <p class="post-credito">Fonte: Assessoria de Imprensa</p>
                    </div>

                        <ul class="tag-list invisible">
                            <li><a href="" rel="tag">tag lista</a></li>
                            <li><a href="" rel="tag">tag lista</a></li>
                        </ul>
                </footer>
                </div>
                <div class="related-posts">
                    <header class="related-posts-header"></header>
                    <article class="related-item">
                        <div class="related-item-inner">
                        <div class="post-thumb">
                                <a href="{{ URL::to('/news/1') }}">
                                  <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb01.jpg')  }}" alt="Elba 2015"> 
                                </a>
                            </div>
                            <footer class="post-footer invisible">
                                <a class="title" href=""><h3>Elba 2015</h3></a>
                                <a class="readmore" href="">Elba 2015</a>
                            </footer>
                        </div>
                    </article>
                    <article class="related-item">
                        <div class="related-item-inner">
                            <div class="post-thumb">
                                <a href="{{ URL::to('/news/7') }}">
                                   <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb07.jpg')  }}" alt="Elba 2015"> 
                                </a>
                            </div>
                            <footer class="post-footer invisible">

                                <a class="title" href=""><h3>Elba 2015</h3></a>
                                <a class="readmore" href="">Elba 2015</a>
                            </footer>
                        </div>
                    </article>
                    <article class="related-item">
                        <div class="related-item-inner">
                            <div class="post-thumb">
                                <a href="{{ URL::to('/news/6') }}">
                                 <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb06.jpg') }}" alt="Elba 2015"> 
                                </a>
                            </div>
                            <footer class="post-footer invisible">
                                <a class="title" href=""><h3>Elba 2015</h3></a>
                                <a class="readmore" href="">Elba 2015</a>
                            </footer>
                        </div>
                    </article>
    
                </div>
            </section>

            @stop 

            @section('script-js')

            @stop
