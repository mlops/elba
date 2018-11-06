<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>
<!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
            <title>@yield('title')</title>
@section('head')
    {{-- Script inicial  --}}
    {{   HTML::style('css/app.css') }}
    {{--{!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/jquery.min.map') !!}--}}
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://malsup.github.io/min/jquery.cycle2.min.js"></script>
{{--     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.caption2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.carousel.min.js"></script> --}}

@show
  <meta name="description" content="Elba Ramalho é uma cantora e atriz brasileira. Vencedora de um prêmio, ainda enquanto atriz, por sua interpretação de "O meu amor" com Marieta Severo em 1978.2 Recebeu da Associação de Críticos de Arte de São Paulo prêmio de "Melhor Show do Ano", em duas ocasiões: em 1989 pelo show Popular Brasileira e em 1996 pelo show Leão do Norte. ">
<meta name="author" content="www.elbaramalho.com.br">
<meta name="keywords" content="cantora, forró, cantora brasileira, mpb, MPB, Recife">

   <!-- Metas para Design Responsivo --> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
<meta name="format-detection" content="telephone=no">
<meta name="MobileOptimized" content="480" />
<meta name="HandheldFriendly" content="True">

{{-- ##### Abaixo e um escript de custom audience FB tem q ter senhae login elba -->
<!-- <script async="" src="//connect.facebook.net/en_US/fbds.js"></script>-->

<!-- ##### Inicio otimização Rede Social --}}
    <meta property='og:title' content='Site Oficial #Elba Ramalho 35 anos' />
    <meta property='og:description' content='Site oficial da cantora elba Ramalho' />
    <meta property='og:url' content='http://www.elbaramalho.com.br' />
    <meta property='og:type' content='website' />
    <meta property='og:site_name' content='Elba Ramalho' />

{{-- Add this to your HEAD if you want to load the    <!-- Homescreen iOS -->
apple-touch-icons from another dir than your sites' root --}}
<link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/fav-icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/fav-icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/fav-icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/fav-icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/fav-icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/fav-icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/fav-icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/fav-icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/fav-icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/fav-icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/fav-icon/favicon-16x16.png">
<link rel="manifest" href="images/fav-icon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/fav-icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
{{-- ##### FIM otimização Rede Social --}}

</head>
<body>
<div class="wrap">
   @include('layout.menu') 

{{--     @yield('content')

    @include('layout.rodape') --}}

</div><!-- fim  wrap -->
</body>

  {{--   @yield('page-script') --}}

</html>

