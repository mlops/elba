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
            <h2>Elba Ramalho faz dueto com a cantora portuguesa Carminho em seu novo disco</h2>
            <p class="post-date">Publicado: 28/03/2015</p>
            </header>

            <div class="post-thumb">
                <img src="{{  URL::to(Config::get('caminho.server_public').'/images/el05.jpg') }}" alt="My Life">        </div>
                <div class="post-body">
                </div>
                <footer class="post-footer">
                    <div class="post-txt">
                        <ul>
                            <li><p class="materia">Provando que sua m  sica n  o tem fronteiras e enriquecendo o car  ter ecl  tico de seu novo disco, Elba Ramalho apresenta aos f  s um dueto com a cantora portuguesa Carminho. A can    o escolhida    o fado    Nos Ares de Lisboa     Um Passarinho Enganador   , in  dita de Dominguinhos e Fausto Nilo. Saiba mais sobre o encontro das duas artistas assistindo ao depoimento de Elba Ramalho abaixo!
</p></li>
                            <li><p class="materia"><br>
                            <p class="materia"></p></p></li>
                            <li></li>
                            <li><p class="post-comprar-btn"></p></li>
                            <li><p class="chamada-itunes"><iframe width="640" height="360" src="https://www.youtube.com/embed/jYNxEY9uBxc" frameborder="0" allowfullscreen></iframe></p></li>
                            <li><p class="chamada-itunes"></p></li>
                            <li><p class="chamada-itunes"></p></li>
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
                                <a href="{{ URL::to('/news/3') }}">
                                  <img src="{{  URL::to(Config::get('caminho.server_public').'/images/el01.jpg') }}" alt="Elba 2015"> 
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
                                <a href="{{ URL::to('/news/5') }}">
                                 <img src="{{ URL::to(Config::get('caminho.server_public').'/images/vitrine03.jpg') }}" alt="Elba 2015"> 
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
