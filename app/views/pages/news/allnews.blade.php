@extends('layout.master4')
@section('title', '/////#Elba Ramalho-News ')
@section('head-script')
    @parent
    {{-- /news/{{ $noticias->id }}/{{ $noticias->slugs }} --}}

@stop

@section('content')
    @include('layout.menu-fix3')
  @include('layout.menu3')
<div class="wrap-article">
  <article class="article">
    @foreach ($noticias as $noticia)
      <h2 class="titulo-news">{{$noticia->title}}</h2>
      <h2 class="dt-linha"></h2>
        <header>
          <p class="date-publicacao">Publicado: {{ date('d/m/Y', strtotime($noticia->created_at)) }} </p>
        
        </header>
        <section>
        <article>
          <a href="/news/{{ $noticia->id }}/{{ $noticia->slugs }}">
              <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/news/{{$noticia->img }} ">
          </a>
              <div class="news-txt">{{ Str::limit($noticia->article,150) }}</div>
          </article>
        </section>
    @endforeach
  </article><!-- /.news -->
</div>
  @include('layout.rodape3')
@stop
@section('script-js')
@stop
