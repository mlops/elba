@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Participações')

@section('content')
<style>
    .pager li a {
    color: #000;
    }
</style>

    @include('layout.menu-fix3')
    @include('layout.menu3')

<section id="participacoes">
    <div class="wrap-participacoes">
    <header class="h-participacoes">
    <h2 class="participacoes-titulo">PARTICIPAÇÕES</h2>
    <p class="participacoes-resumo">Nesta seção você encontrará todas as gravações que Elba fez fora da discografia oficial. São registros de participações em CDs e DVDs de amigos, em projetos especiais e ainda faixas avulsas de singles e coletâneas. Ao clicar nas capas você terá acesso às letras, fichas técnicas detalhadas e ainda poderá escutar as músicas.</p>
    <p class="participacoes-credito">Acervo, pesquisa e produção: Nelson Souza Jr. e Tiago Silva Marques</p>
    </header>
            <ul class="participacoes-lst">
        @foreach ($anos as $ano)
            <li class="participacoes-lst--ano">{{ $ano->ano }}</li>
            @foreach ($ano->Participacoes as $par)
            <a href="participacoes/{{$par->id}}" >
                <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/participacoes/capas/{{$par->capa_sm }} " alt="{{$par->nome_disco }}" />
            </a>
            @endforeach
        @endforeach
        </ul>
        {{-- {{ $anos->links() }} --}}
        {{ $anos->links('pagination::simple') }}
    </div><!-- /.wrap-participacoes -->
</section><!-- /.section -->



    @include('layout.rodape3')

@stop
@section('script-js')

@stop
