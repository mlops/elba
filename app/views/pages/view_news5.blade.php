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
            <h2>A poesia de Dominguinhos e DJ Dolores em uma   nica can    o</h2>
            <p class="post-date">Publicado: 28/03/2015</p>
            </header>

            <div class="post-thumb">
                <img src="{{  URL::to(Config::get('caminho.server_public').'/images/vitrine03.jpg') }}" alt="My Life">        </div>
                <div class="post-body">
                </div>
                <footer class="post-footer">
                    <div class="post-txt">
                        <ul>
                            <li><p class="materia">   Olhando o Cora    o   , primeira faixa do novo   lbum, mostra a que veio Elba Ramalho. At   ent  o in  dita, a can    o    poesia em dose dupla:    beleza da composi    o de Dominguinhos e Clim  rio houve o acr  scimo da poesia de DJ Dolores. Com um misto inusitado de instrumentos, como p  fano, kalimba e zabumba, a m  sica representa o cart  o-postal perfeito para    Do Meu Olhar Pra Fora   .
</p></li>
                            <li><p class="materia"><br>
                            <p class="materia"></p></p></li>
                            <li></li>
                            <li><p class="post-comprar-btn"></p></li>
                            <li><p class="chamada-itunes"><iframe width="640" height="360" src="https://www.youtube.com/embed/-aVrHg4MOto" frameborder="0" allowfullscreen></iframe></p></li>
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
                                <a href="{{ URL::to('/news/2') }}">
                                  <img src="{{  URL::to(Config::get('caminho.server_public').'/images/elb03.jpg')  }}" alt="Elba 2015"> 
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
                                <a href="{{ URL::to('/news/3') }}">
                                   <img src="{{ URL::to(Config::get('caminho.server_public').'/images/el01.jpg') }}" alt="Elba 2015"> 
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
