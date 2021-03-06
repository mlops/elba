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
            <h2>   Do meu olhar pra fora   , novo CD de Elba Ramalho, j   est   nas lojas e em todas as plataformas digitais.</h2>
            <p class="post-date">Publicado: 28/03/2015</p>
            </header>

            <div class="post-thumb">
                <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb01.jpg')}}" alt="My Life">        </div>
                <div class="post-body">
                </div>
                <footer class="post-footer">
                    <div class="post-txt">
                        <ul>
                            <li><p class="materia">   Do meu olhar pra fora   , o novo trabalho de Elba Ramalho, j   est   nas lojas de todo o Brasil e tamb  m nas plataformas digitais. Chega recheado de surpresas, sendo a maior delas a sonoridade pop/contempor  nea. O disco tamb  m est   dispon  vel para degusta    o no canal do YouTube da gravadora Coqueiro Verde Records. Confira:</p></li>
                            <li><p class="materia hidden">   Da gravadora Coqueiro Verde Records   <br></p>
                            <p class="materia"><a  href="http://www.youtube.com/watch?v=7jmqxE_g5lE&list=PLrzr8ul1N3DqEODkp4IY2a6nbakP5Gd5Z">http://www.youtube.com/watch?v=7jmqxE_g5lE&list=PLrzr8ul1N3DqEODkp4IY2a6nbakP5Gd5Z</a></p></li>


                            <li><p class="chamada-itunes">"Clique aqui e compre o novo Álbum de Elba Ramalho no iTunes!" </p></li>
                            <li><p class="post-comprar-btn"><a href="https://itunes.apple.com/br/album/do-meu-olhar-para-fora/id975878265">Comprar</a></p></li>
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
                                <a href="{{ URL::to('/news/2')}}">
                                  <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb03.jpg')}}" alt="Elba 2015"> 
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
                                <a href="{{ URL::to('/news/6')}}">
                                 <img src="{{  URL::to(Config::get('caminho.server_public').'/images/elb06.jpg')}}" alt="Elba 2015"> 
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
                                   <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb07.jpg')}}" alt="Elba 2015"> 
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
