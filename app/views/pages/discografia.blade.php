@extends('layouts.default')


@section('content')

<section id="album" class="section-container">
    <article id="album-item-7" class="album-item">
    <div class="album-thumb">
        <img src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/elba_album_1.jpg')}}" alt="ELBA"> 
    </div>
    <div class="album-item-inner">
        <div class="album-details-wrapper">
            <div class="album-sub-nav">
                <div class="album-title"><h2> VAMBORA LÁ DANÇAR </h2></div>
                <div class="album-year">(2013)</div>
                <ul>
                                            <li><a href="{{ URL::to('/disco/media_view01/')}}">Musicas</a></li>
                                            <li><a href="#">Galeria</a></li>
                                            <li><a href="#">Release</a></li>
                                            <li><a href="#">Saiba Mais</a></li>
                                            <li><a href="#">Imprensa</a></li>
                                            <li><a href="#">Creditos</a></li>
                </ul>
            </div>
        </div>
    </div>
</article><article id="album-item-3474" class="album-item">
    <div class="album-thumb">
       <img src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/elba_album_2.jpg')}}" alt="ELBA"> 
    </div>
    <div class="album-item-inner">
        <div class="album-details-wrapper">
            <div class="album-sub-nav">
                <div class="album-title"><h2>Marco Zero</h2></div>
                <div class="album-year">(2010)</div>
                <ul>
                                            <li><a href="{{ URL::to('/disco/media_view02') }}">Musicas</a></li>
                                            <li><a href="#">Galeria</a></li>
                                            <li><a href="#">Release</a></li>
                                            <li><a href="#">Saiba Mais</a></li>
                                            <li><a href="#">Imprensa</a></li>
                                            <li><a href="#">Creditos</a></li>
                                    </ul>
            </div>
        </div>
    </div>
</article><article id="album-item-3476" class="album-item">
    <div class="album-thumb">
          <img src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/elba_album_3.jpg')}}" alt="ELBA"> 
    </div>
    <div class="album-item-inner">
        <div class="album-details-wrapper">
            <div class="album-sub-nav">
                <div class="album-title"><h2>Balaio de Amor</h2></div>
                <div class="album-year">(2009)</div>
                <ul>
                                            <li><a href="{{ URL::to('/disco/media_view03/') }}">Musicas</a></li>
                                            <li><a href="#">Galeria</a></li>
                                            <li><a href="#">Release</a></li>
                                            <li><a href="#">Saiba Mais</a></li>
                                            <li><a href="#">Imprensa</a></li>
                                            <li><a href="#">Creditos</a></li>
                </ul>
            </div>
        </div>
    </div>
</article><article id="album-item-3478" class="album-item">
    <div class="album-thumb">
         <img src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/elba_album_4.jpg')}}" alt="ELBA Qual Assunto"> 
    </div>
    <div class="album-item-inner">
        <div class="album-details-wrapper">
            <div class="album-sub-nav">
                <div class="album-title"><h2>Qual o Assunto que Mais lhe Interessa?</h2></div>
                <div class="album-year">(2007)</div>
                                    <ul>
                                            <li><a href="{{ URL::to('/disco/media_view04/') }}">Musicas</a></li>
                                            <li><a href="#">Galeria</a></li>
                                            <li><a href="#">Release</a></li>
                                            <li><a href="#">Saiba Mais</a></li>
                                            <li><a href="#">Imprensa</a></li>
                                            <li><a href="#">Creditos</a></li>
                                    </ul>
            </div>
        </div>
    </div>
</article><article id="album-item-3480" class="album-item">
    <div class="album-thumb">
        <img src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/elba_album_5.jpg')}}" alt="ELBA E DOMINGUINHOS"> 
    </div>
    <div class="album-item-inner">
        <div class="album-details-wrapper">
            <div class="album-sub-nav">
                <div class="album-title"><h2>ELBA E DOMINGUINHOS</h2></div>
                <div class="album-year">(2005)</div>
                                    <ul>
                                            <li><a href="{{ URL::to('/disco/media_view05/') }}">Musicas</a></li>
                                            <li><a href="#">Galeria</a></li>
                                            <li><a href="#">Release</a></li>
                                            <li><a href="#">Saiba Mais</a></li>
                                            <li><a href="#">Imprensa</a></li>
                                            <li><a href="#">Creditos</a></li>
                                    </ul>
            </div>
        </div>
    </div>
</article>
</section>










@stop