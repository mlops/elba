<article id="news">
  <div class="wrap-news">
    <h1>Notícias</h1>
    <span>Clique e confira as últimas notícias da artista!</span>
    <section>
    <ul class="grid">
        @foreach ($news as $noticias)
              <li class="title-box">
                   <a href="/news/{{ $noticias->id }}/{{ $noticias->slugs }}">
                             <img class="lazy img-responsive" data-original="{{ URL::to(Config::get('caminho.server_public').'')}}/images/{{$noticias->img }} " src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/news/{{$noticias->img }} ">
                                 <h3 class="hvr-underline-from-left">
                                 {{$noticias->title}}
                                 </h3>
                    </a>
          </li> 
          @endforeach
     </ul>
    </section>
  </div>
</article>