@extends('layout.master4')
@section('title', '/////#Elba Ramalho - Agenda ')
@section('head-script')
    @parent
@stop

@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')
@foreach ($agenda as $lstbook)
    <p>{{ $lstbook->evento }}</p>
@endforeach
	   @include('layout.rodape3')
@stop
@section('script-js')
@stop
