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
            <h2>     rvore       a mais pedida na R  dio MPB FM antes mesmo do lan  amento do disco. </h2>
            <p class="post-date">Publicado: 28/03/2015</p>
            </header>

            <div class="post-thumb">
                <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb06.jpg')  }}" alt="My Life">        </div>
                <div class="post-body">
                </div>
                <footer class="post-footer">
                    <div class="post-txt">
                        <ul>
                            <li><p class="materia">Em dezembro de 2014, foi lan  ado um aperitivo do novo disco de Elba Ramalho,    Do meu olhar pra fora   . Tratava-se de um EP para o iTunes com tr  s faixas, como forma de aperitivo para o que estava por vir. Logo a seguir, uma delas,      rvore   , j   se consolidava como a mais pedida na r  dio MPB FM do Rio de Janeiro. A can    o do baiano Edson Gomes    um cl  ssico do reggae nacional e       um despertar para a delicadeza, para com os animais, a natureza, principalmente para com o ser humano   , nas palavras de Elba. Confira o v  deo da s  rie    faixa a faixa   :
                            
</p></li>
                            <li><p class="materia"><br>
                            <p class="materia"></p></p></li>
                            <li></li>
                            <li><p class="post-comprar-btn"></p></li>
                            <li><p class="chamada-itunes"><iframe width="640" height="360" src="https://www.youtube.com/embed/cBLs7hm0Mlo" frameborder="0" allowfullscreen></iframe></p></li>
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
                                <a href="{{ URL::to('/news/5') }}">
                                  <img src="{{ URL::to(Config::get('caminho.server_public').'/images/vitrine03.jpg')  }}" alt="Elba 2015"> 
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
                                 <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb07.jpg') }}" alt="Elba 2015"> 
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
                                <a href="{{ URL::to('/news/2') }}">
                                   <img src="{{ URL::to(Config::get('caminho.server_public').'/images/elb03.jpg') }}" alt="Elba 2015"> 
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
