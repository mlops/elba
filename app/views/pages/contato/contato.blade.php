@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Contato ')
@section('head-script')
    @parent

    <style>

    </style>

   <script type="text/javascript">

   </script>
@stop

@section('content')
@include('layout.menu-fix3')
  @include('layout.menu3')


<section id="contato">
<div class="office">
  <div class="office-title">#SHOWS / MANAGEMENT</div><!-- /.office-title -->
  <div class="office-body"><p>ACAUÃ PRODUTORA LTDA</p>
<p>+5521 2523-0094 / +5521 2521-6499</p></div><!-- /.office-body -->
</div><!-- /.office -->
<div class="press">
  <div class="press-title">#IMPRENSA / PRESS</div><!-- /.press-tilte -->
  <div class="press-body"><p>Beatriz Merched</p>
<p>beatriz@merchedcomunicacao.com.br</p>
<p>+5521 98459.6119</p></div><!-- /.press-body -->
</div><!-- /.press -->


<div class="press">
  <div class="press-title">#SITE</div><!-- /.press-tilte -->
  <div class="press-body">
  <p>Pesquisa biográfica, acervo e textos.</p>
  <p>TIAGO SILVA MARQUES</p>
<p>tiagobsb@gmail.com</p></div><!-- /.press-body -->
</div><!-- /.press -->

</section>

	   @include('layout.rodape3')
@stop
@section('script-js')

@stop
