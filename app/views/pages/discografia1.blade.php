@extends('layouts.default')


@section('content')

@foreach($discos as $disco)

    <section id="album" class="section-container">
        <article id="album-item-{{ $disco->id }}" class="album-item">
        <div class="album-thumb">
            <img src=" {{URL::to(Config::get('caminho.server_public').'img')}}/fundos/{{  $disco->foto_fundo }}" alt="ELBA"> 

            <!--  <li>{{ HTML::link("/disco/media_view01/$disco->id","Musicas", "Logo")  }}</li> -->
        </div>
        <div class="album-item-inner">
            <div class="album-details-wrapper">
                <div class="album-sub-nav">
                    <div class="album-title"><h2>{{ $disco->nome_disco }} </h2></div>
                    <div class="album-year">({{ $disco->ano }})</div>
                   <!--  <div class="album-year">{{ var_dump($disco->slug) }}</div> -->
                    <ul>
                                                <li><a href="/disco/{{ $disco->slug}}">Musicas</a></li>
                                                <li><a href="#">Release</a></li>
                                                <li><a href="#">Texto</a></li>
                                                <li><a href="#">Imprensa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
    </section>

  

@endforeach





@stop