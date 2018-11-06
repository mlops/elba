@extends('layout.master4')
@section('title', '/////#Elba Ramalho-News')
@section('head-script')
    @parent
@stop

@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')
<div class="wrap-article">
  <article class="article">
    @foreach ($news as $noticia)
      <h2 class="titulo-news">{{ $noticia->title }}</h2>
      <h2 class="dt-linha"></h2>
        <header>
          <p class="date-publicacao">Publicado: {{ date('d/m/Y', strtotime($noticia->created_at)) }} </p>
        </header>
        <section>
            <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/news/{{$noticia->img }} ">
          <article>
            <div class="news-txt">{{ $noticia->article}}</div>
            <footer>
              @if(empty($noticia->fonte))
              @else
              <p>Fonte:<br>{{ $noticia->fonte }}</p>
              @endif
            </footer>
          </article>
        </section>
    @endforeach
  </article><!-- /.news -->
</div>
  @include('layout.rodape3')
@stop
@section('script-js')


@stop
