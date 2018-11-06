<section id="cds">
  <div class="wrap-cds">
    <div class="titulo-discos">
      <h1>Discos</h1>
    </div>
  @foreach ($discos as $disco)
  <section class="discos">
    <div class="disco-imagem">
      <a href="disco/{{$disco->id }}/{{$disco->slug }}">
        <img src="{{ URL::to(Config::get('caminho.server_public').'')}}/images/capas/{{$disco->capa_sm }} " alt="disco {{$disco->nome_disco }}" />
      </a>
    </div><!-- /.disco-imagem -->
  </section>
  @endforeach

  </div>

</section>