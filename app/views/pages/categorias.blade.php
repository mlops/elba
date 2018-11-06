@extends('layout.master3')
@section('title', '/////#Elba Ramalho ')@stop
@section('head-script')
    @parent
    <style>
    </style>
@stop

@section('content')
<div class="container-categorias">
  <div class="wrap-categorias">
    <div class="carreira"><a href="/"><img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/cds01.png " alt="cds"/><h2>Carreira</h2></a></div><!-- /.carreira -->
    <div class="dvds"><a href="#"><img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/dvds01.png " alt="dvds" /><h2>Dvds</h2></a></div><!-- /.dvds -->
    <div class="participacoes"><a href="#"><img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/participacoes01.png " alt="participacoes" /><h2>Participações</h2></a></div><!-- /.participacoes -->
    <div class="sk7"><a href="#"><img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/sk701.png " alt="K7-singles" /><h2 >K7 / Singles</h2></a></div><!-- /.sk7 -->
  </div><!-- /.categorias -->
</div>
@stop
@section('script-js')
@stop
