<section id="cds">
    <div class="wrap-cds">
      <div class="titulo-discos">
        <h1>Discos</h1>
      </div>
      @foreach ($discos as $disco)
        <section class="discos">
          <div class="disco-ano">{{ $disco->ano }}</div><!-- /.disco-ano -->
          <div class="disco-nome">{{ $disco->nome_disco }}</div><!-- /.disco-nome -->
          <div class="disco-imagem">
          <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/capas/{{$disco->capa_disco }} " alt="disco {{ $disco->nome_disco }}" />
          </div><!-- /.disco-imagem -->
        </section>
      @endforeach

    </div>

</section>