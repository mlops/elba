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
            <h2>Elba é capa da edição sobre o Outubro Rosa da revista da Gol Linhas Aéreas Inteligentes.</h2>
            <p class="post-date">Publicado: 18/10/2015</p>
            </header>

            <div class="post-thumb">
                <img src="{{  URL::to(Config::get('caminho.server_public').'/images/news/vitrine07.jpg') }}" alt="My Life">        </div>
                <div class="post-body">
                </div>
                <footer class="post-footer">
                    <div class="post-txt">
                        <ul>
                            <li><p class="materia">O "Outubro Rosa" é uma campanha de conscientização que tem como objetivo principal alertar as mulheres e a sociedade sobre a importância da prevenção e do diagnóstico precoce do câncer de mama. Nesta edição da revista da Gol Linhas Aéreas Inteligentes, Elba conta como foi sua jornada na luta contra o câncer e dá um exemplo de fé, otimismo e amor próprio. Confira abaixo:
</p></li>
                            <li><p class="materia"><br>
                            <p class="materia"></p></p></li>
                            <li></li>
                            <li><p class="post-comprar-btn"></p></li>
                            <li><p class="chamada-itunes"><iframe width="640" height="360" src="https://www.youtube.com/embed/4m5E4QjRVbQ" frameborder="0" allowfullscreen></iframe></p></li>
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
                                <a href="{{ URL::to('/news/4') }}">
                                  <img src="{{ URL::to(Config::get('caminho.server_public').'/images/el05.jpg') }}" alt="Elba 2015"> 
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
                                <a href="{{ URL::to('/news/1') }}">
                                 <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb01.jpg') }}" alt="Elba 2015"> 
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
                                   <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb06.jpg')}}" alt="Elba 2015"> 
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
