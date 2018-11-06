@extends('layout.master4')
@section('title')
@section('head-script')
  @parent
      <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/jquery-1.11.2.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
       <style>
       #youtube-player{max-width:100%!important}
      .carousel-fade .carousel-inner .item {
        opacity: 0;
        -webkit-transition-property: opacity;
        -moz-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity;
      }
      .carousel-fade .carousel-inner .active {
        opacity: 1;
        overflow: hidden;
      }
      .carousel-fade .carousel-inner .active.left,
      .carousel-fade .carousel-inner .active.right {
        left: 0;
        opacity: 0;
        z-index: 1;
        overflow: hidden;

      }
      .carousel-fade .carousel-inner .next.left,
      .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
        overflow: hidden;
      }
      .carousel-fade .carousel-control {
        z-index: 2;
      }


       </style>

@stop


@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')
{{-- @include('partial.index.video') --}}
@include('partial.index.carousel')
@include('partial.index.news')
@include('partial.index.discos1')
@include('partial.index.agenda')
@include('partial.index.instagram')


   @include('layout.rodape3')
@stop
@section('script-js')
 @parent
  <script>
    $(function() {
      $('#myCarousel').carousel(
            { interval: 5000,
              cycle: true,
              pause: "hover"
      });
    });
  </script>

@stop
