@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Midias ')
@section('head-script')
    @parent
    <style>
    </style>
@stop

@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')
<div class="container-categorias">
  <div class="wrap-categorias">
  <a class="carreira" href="{{ URL::to('/discos/') }}">
    <h2>CDS</h2>
    <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/cds01.png " alt="cds"/>
  </a>

  <a class="dvds" href="{{ URL::to('/dvds/') }}">
    <h2>DVDS</h2>
    <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/dvds01.png " alt="dvds" />
 </a><!-- /.dvds -->

 <a class="participacoes" href="{{ URL::to('/participacoes/') }}">
    <h2>PARTICIPAÇÕES</h2>
 <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/participacoes01.png " alt="participacoes" />
 </a><!-- /.participacoes -->

 <a class="singles" href="{{ URL::to('/singles/') }}">
    <h2 >SINGLES</h2>
    <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/sk701.png " alt="K7-singles" />
 </a><!-- /.singles -->


  </div><!-- wrap-categoria -->
</div><!-- container-categorias -->
  @include('layout.rodape3')
@stop