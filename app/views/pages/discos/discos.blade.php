@extends('layout.master4')
@section('title', '/////#Elba Ramalho ')
@section('head-script')
    @parent
    <style>
    </style>
@stop

@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')
<div class="container-alldiscos">
    <div class="wrap-alldiscos">
  @foreach ($discos as $disco)
        <div class="wrap-img">
            <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/fundos-cd/{{ $disco->foto_fundo }}" alt="{{$disco->nome_disco }}">
    <a href="/disco/{{ $disco->id }}/{{ $disco->slug }}">
        <div class="caption">
                <div class="caption-text">
                    <h1>{{  $disco->nome_disco }} </h1>
                    <p>{{  $disco->ano }}</p>
                </div>
        </div>
    </a>
        </div>
  @endforeach
   </div><!-- /.wrap-alldiscos -->
</div>
        @include('layout.rodape3')
@stop
@section('script-js')
<script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/according.js"></script>
@stop
