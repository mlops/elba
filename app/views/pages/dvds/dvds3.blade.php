@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Dvds ')
@section('head-script')
    @parent
  {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.0/imagesloaded.min.js') }}

@stop

@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')
<section id="dvds">
    <div class="wrap-dvds">
    
    <div class="grid-dvds">
    @foreach ($dvds as $dvd)
    <header class="h-dvds">
    <h2 class="dvds-titulo">DVDS</h2>
    <p class="dvds-resumo">Conheça em detalhes as obras e veja alguns vídeos.</p>22
      
    </header>
      <div class="grid-item--width2">
      <a href="dvd/{{$dvd->id}}/{{$dvd->slug}}">
      <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/dvds/{{$dvd->dvd_capa}} " alt="{{$dvd->dvd }}" />
      </a>
      </div>
    @endforeach
    </div>

    </div><!-- /.wrap-Dvds -->
</section><!-- /.section -->
  @include('layout.rodape3')
@stop
@section('script-js')
@stop
