@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Dvds ')
@section('head-script')
    @parent
  {{ HTML::script('http://www.nealfletcher.co.uk/js/jquery.imagesloaded.js') }}

@stop

@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')
<section id="dvds">
    <div class="wrap-dvds">
    <header class="h-dvds">
    <h2 class="dvds-titulo">DVDS</h2>
    <p class="dvds-resumo">Conheça em detalhes as obras e veja alguns vídeos.</p>
    </header>
        <div class="dvds-lst">
            @foreach ($anos as $ano)
                <div class="dvd-capa">
                    <p class="dvd-ano">{{$ano->ano}}</p>
                    <a href="dvd/{{$ano->id}}/{{$ano->slug}}"><img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/dvds/{{$ano->dvd_capa}} " alt="{{$ano->dvd }}" /></a>
                    <p class="dvd-nome">{{$ano->dvd}}</p>
                </div>
       
            @endforeach
        </div>
    </div><!-- /.wrap-participacoes -->
</section><!-- /.section -->
  @include('layout.rodape3')
@stop
@section('script-js')
@stop
