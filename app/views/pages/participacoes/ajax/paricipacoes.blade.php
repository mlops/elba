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
{{ $anos->links() }}