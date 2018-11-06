<figure class="header-unit">
    <div class='txtfade'>
        <div class='fadey'><h1 class="txt-video">#Elba Ramalho</h1></div>
        <div class='fadey'><h1 class="txt-video">36 Anos de Sucesso</h1></div>
        <div class='fadey'><h1 class="txt-video">Incomparável</h1></div>
    </div>
{{--   <video autoplay loop  
    src="{{  URL::to(Config::get('caminho.server_public').'/images/iphone.mp4') }}" type="video/mp4"><!-- end video -->
</video> --}}
<video autoplay  poster="{{URL::to(Config::get('caminho.server_public').'') }}/images/fall-back02.gif"  loop>

<source src="{{  URL::to(Config::get('caminho.server_public').'') }}/images/iphone.mp4" type="video/mp4" data-format="mp4">
<source src="{{  URL::to(Config::get('caminho.server_public').'') }}/images/web1.webm" type="video/webm" data-format="webm">
</video>

</figure>