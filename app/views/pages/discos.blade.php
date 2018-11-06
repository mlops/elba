@extends('layout.master')
@section('title', '/////#Elba Ramalho - Discos ')@stop
@section('head-script')
    @parent
    {{ HTML::script('http://www.appelsiini.net/projects/lazyload/jquery.lazyload.js') }}
<script type="text/javascript">
    $(function() {
      $("img.lazy").lazyload({
          effect : "fadeIn"
      });
    });
</script>  
@stop
@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')
<div class="container-a4">
@foreach($discos as $disco)
        <ul class="caption-style-4">
            <li>
                <img class="lazy img-responsive" data-id="album-item-{{  $disco->id }}" 
                data-original="{{ URL::to(Config::get('caminho.server_public').'')}}/images/fundos-cd/{{  $disco->foto_fundo }}" 
                src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/fundos-cd/{{  $disco->foto_fundo  }}" alt="{{  $disco->nome_disco }}">
                <div class="caption">
                    <div class="blur"></div>
                    <div class="caption-text">
                        <h1>{{  $disco->nome_disco }} </h1>
                        <p>{{  $disco->ano }}</p>
                        <ul>
                                                    <li><a href="/disco/{{ $disco->slug }}">O Disco</a></li>

                        </ul>
                    </div>

                </div>
            </li>
    </ul>
@endforeach
</div>
       @include('layout.rodape3')
@stop

@section('script-js')

@stop
