<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
   <head>

   <meta charset="utf-8">
   <title>@yield('title', '/////#Elba Ramalho')</title>
            @include('layout.meta')
        @section('head-script')
                <link rel=stylesheet href="{{ URL::to(Config::get('caminho.server_public').Config::get('caminho.sass').'/css/style.min.css') }}">

                <!--[if lt IE 9]>
                    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
                <!--[if lt IE 7]>
                            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
                        <![endif]-->
               <!--  //aqui carrega-se 2 x ppara evitar problemas de loading cache via CDN -->
               {{-- Suporte a midias querys IE verões ianteriores 8 --}}

               <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/jquery-1.11.2.min.js"></script>

        @show



</head>
<body>


     @yield('content')

</body>

    @section('footer')
        <script type="text/javascript" src="{{ URL::asset('js/nav.js') }}"></script>
    @show

  @yield('script-js')

</html>