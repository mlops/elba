@extends('layouts.default')


@section('content')

<section id="tracks" class="section-container">

    <div class="tracks-listing">
        <article class="album-tracks-item">
    <h2>VAMBORA L   DAN  AR (2013)</h2>


    <div class="album-tracks-col-left">
        <div class="post-thumb">
            <img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/vamoboraladancar.jpg') }}" alt="BEYONC  " />        </div>
                    <div class="album-purchase-links">
                <ul>
                     <li><a href="#" target="_blank">Comprar</a></li>                </ul>
            </div>
            </div>
            <div class="album-tracks-col-right">
            <ul>
                <li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="1" data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas/vbld/01-Embolar_na_areia.mp3')}}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Embolar na areia 
                        </button>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="http://www.youtube.com/watch?v=LXXQLa-5n5w">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                         <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                        </li>
                 <!--        <li class="track-duration">(4:18)</li> -->

                        <li class="track-credits"><a href="#" data-post-id="3720" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="3720" data-preview-type="lyrics">Letras</a></li>
                    </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="2" 
                        data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/vbld/02-Deitar_e_rolar.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Deitar e Rolar                    
                      </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                    <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                    <li class="play-associated-video">
 <!--                    <button data-video-url="https://www.youtube.com/watch?v=YCnzlPG3_oU">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                        <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                    </li>
                   <!--  <li class="track-duration">(6:09)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4056" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4056" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="3" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/vbld/03-Frevo_meio_envergonhado.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Frevo Meio Envergonhado 
                       </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
       <!--              <button data-video-url="https://www.youtube.com/watch?v=p1JPKLa-Ofc">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                     </li>
                    <!-- <li class="track-duration">(5:23)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4057" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4057" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="4" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/vbld/04-Quando_fecho_os_olhos.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Quando Fecho Os Olhos 
                       </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
<!--                     <button data-video-url="https://www.youtube.com/watch?v=C7E02fzfnXs">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                        </li>
                           <!--  <li class="track-duration">(5:09)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4061" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4061" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="5" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/vbld/05-Por_que_tem_que_ser_assim.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Por Que Tem Que Ser Assim?
                         </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
     <!--                <button data-video-url="https://www.youtube.com/watch?v=FxcUxV8urJ8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:48)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4062" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4062" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                       <button class="trigger-track-preview" data-track-id="6" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/vbld/06-N  o_chora_n  o_chora_n  o.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        N  o Chora, N  o Chora N  o
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
      <!--               <button data-video-url="https://www.youtube.com/watch?v=pZ12_E5R3qc&amp;list=UU9zX2xZIJ4cnwRsgBpHGvMg">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(5:19)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4064" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4064" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="7" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/vbld/07-Amor_de_bumba_meu_boi.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Amor De Bumba-Meu-Boi
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
          <!--           <button data-video-url="https://www.youtube.com/watch?v=iqdbdQ6etso">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:04)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4068" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4068" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="8" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/vbld/08-Fibra_de_cristal.mp3') }} ">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Fibra De Cristal
                        </button>
             </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                            <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="https://www.youtube.com/watch?v=iT56VtNSeR8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(6:31)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4069" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4069" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="9" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/vbld/09-Mucuripe.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Mucuripe
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                            <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
               <!--      <button data-video-url="https://www.youtube.com/watch?v=3IeOmXZ95i8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(6:18)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4074" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4074" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="10" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/vbld/10-Onde_Deus_possa_me_ouvir.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Onde Deus Possa Me Ouvir 
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
              <!--       <button data-video-url="https://www.youtube.com/watch?v=3xUfCUFPL-8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:35)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4075" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4075" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="11" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/vbld/11-Tudelaeudeca.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Tu De L  , Eu De C  
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
               <!--      <button data-video-url="https://www.youtube.com/watch?v=AAy9NO7yk0s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(4:10)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4087" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4087" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                         <button class="trigger-track-preview" data-track-id="12" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/vbld/12-Narede.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Na Rede
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="https://www.youtube.com/watch?v=Pe2uVbLltQs">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(4:36)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4129" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4129" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="13" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/vbld/13-Minhavidaeteamar.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Minha Vida    Te Amar
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                            <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
         <!--            <button data-video-url="https://www.youtube.com/watch?v=gogfeVUtK3s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:50)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4136" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4136" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="14" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/vbld/14-Forro_brasileiro.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Forr   Brasileiro
                        </button>
                        </li>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
                      <!-- <button data-video-url="https://www.youtube.com/watch?v=34xCpMRF92o">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                            </button> -->
                            </li>
                           <!--  <li class="track-duration">(4:26)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4141" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4141" data-preview-type="lyrics">Letras</a></li>
      </ul>
    </div>
</li>            </ul>
        </div>
    </article>
    <article class="album-tracks-item">
    <h2>MARCO ZERO (2010)</h2>
    <div class="album-tracks-col-left">
        <div class="post-thumb">
            <img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/marcozero.jpg') }}" alt="4" />        </div>
                    <div class="album-purchase-links">
                <ul>
                    <li><a href="#" target="_blank">Comprar</a></li>                </ul>
            </div>
            </div>
            <div class="album-tracks-col-right">
            <ul>
                <li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="1" data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas/mzero/01-anunciacao.mp3')}}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Anuncia    o
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="http://www.youtube.com/watch?v=LXXQLa-5n5w">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                         <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                        </li>
                 <!--        <li class="track-duration">(4:18)</li> -->

                        <li class="track-credits"><a href="#" data-post-id="3720" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="3720" data-preview-type="lyrics">Letras</a></li>
                    </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="2" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/mzero/02-banquetedesignos.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Banquete De Signos                   
                      </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
 <!--                    <button data-video-url="https://www.youtube.com/watch?v=YCnzlPG3_oU">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                        <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                    </li>
                   <!--  <li class="track-duration">(6:09)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4056" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4056" data-preview-type="lyrics">Letras</a></li>
                    </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                       <button class="trigger-track-preview" data-track-id="3" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/mzero/03-canta_coracao.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Canta Cora    o
                       </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
       <!--              <button data-video-url="https://www.youtube.com/watch?v=p1JPKLa-Ofc">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                     </li>
                    <!-- <li class="track-duration">(5:23)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4057" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4057" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="4" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/mzero/04-morena_de_angola.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Morena De Angola
                       </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                    <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
<!--                     <button data-video-url="https://www.youtube.com/watch?v=C7E02fzfnXs">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                        </li>
                           <!--  <li class="track-duration">(5:09)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4061" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4061" data-preview-type="lyrics">Letras</a></li>
                    </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="5" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/mzero/05-pavao_mysterioso.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Pav  o Mysterioso
                         </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
     <!--                <button data-video-url="https://www.youtube.com/watch?v=FxcUxV8urJ8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                    </li>
                            <!-- <li class="track-duration">(3:48)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4062" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4062" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="6" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/mzero/06-O_meu_amor.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        O Meu Amor
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                    <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
      <!--               <button data-video-url="https://www.youtube.com/watch?v=pZ12_E5R3qc&amp;list=UU9zX2xZIJ4cnwRsgBpHGvMg">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(5:19)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4064" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4064" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="7" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/mzero/07-de_volta_pro_aconchego.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        De Volta Pro Aconchego
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
          <!--           <button data-video-url="https://www.youtube.com/watch?v=iqdbdQ6etso">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:04)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4068" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4068" data-preview-type="lyrics">Letras</a></li>
       </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="8" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/mzero/08-queixa.mp3') }} ">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Queixa
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="https://www.youtube.com/watch?v=iT56VtNSeR8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(6:31)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4069" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4069" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="9" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/mzero/09-admiravelgadonovo.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Admir  vel gado novo
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                            <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
               <!--      <button data-video-url="https://www.youtube.com/watch?v=3IeOmXZ95i8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(6:18)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4074" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4074" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="10" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/mzero/10-chorando_e_cantando.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Chorando e Cantando
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                            <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
              <!--       <button data-video-url="https://www.youtube.com/watch?v=3xUfCUFPL-8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:35)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4075" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4075" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="11" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/mzero/11-e_so_voce_querer.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                           S   Vo     Querer
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                            <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
               <!--      <button data-video-url="https://www.youtube.com/watch?v=AAy9NO7yk0s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(4:10)</li> -->
                                        <li class="track-credits"><a href="#" data-post-id="4087" data-preview-type="credits">Cr  ditos</a></li>
                                        <li class="track-lyrics"><a href="#" data-post-id="4087" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                         <button class="trigger-track-preview" data-track-id="12" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/mzero/12-chao_de_giz.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Ch  o de Giz
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="https://www.youtube.com/watch?v=Pe2uVbLltQs">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(4:36)</li> -->
                          <li class="track-credits"><a href="#" data-post-id="4129" data-preview-type="credits">Cr  ditos</a></li>
                          <li class="track-lyrics"><a href="#" data-post-id="4129" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="13" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/mzero/13-chuva_de_sombrinhas.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Chuva de Sombrinhas
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
         <!--            <button data-video-url="https://www.youtube.com/watch?v=gogfeVUtK3s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:50)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4136" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4136" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="14" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/mzero/14-Frevo_mulher.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Frevo Mulher
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
                      <!-- <button data-video-url="https://www.youtube.com/watch?v=34xCpMRF92o">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                            </button> -->
                            </li>
                           <!--  <li class="track-duration">(4:26)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4141" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4141" data-preview-type="lyrics">Letras</a></li>
                    </ul>
                </div>
            </li>            
        </ul>
    </div>
</article>
    <article class="album-tracks-item">
    <h2>BALAIO DE AMOR (2009)</h2>
    <div class="album-tracks-col-left">
        <div class="post-thumb">
            <img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/capaBalaio.jpg') }}" alt="Balaio de Amor" />        </div>
                    <div class="album-purchase-links">
                <ul>
                    <li><a href="#" target="_blank">Comprar</a></li>                </ul>
            </div>
            </div>
            <div class="album-tracks-col-right">
            <ul>
                <li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="1" data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas/bda/01-fuxico.mp3')}}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Fuxico
                        </button>
           </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="http://www.youtube.com/watch?v=LXXQLa-5n5w">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                         <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                        </li>
                 <!--        <li class="track-duration">(4:18)</li> -->

                        <li class="track-credits"><a href="#" data-post-id="3720" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="3720" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="2" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/bda/02-um_baiao_chamado_saudade.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Um Bai  o Chamado Saudade
                      </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
 <!--                    <button data-video-url="https://www.youtube.com/watch?v=YCnzlPG3_oU">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                        <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                    </li>
                   <!--  <li class="track-duration">(6:09)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4056" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4056" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="3" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/bda/03-riso_cristalino.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Riso Cristalino
                       </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
       <!--              <button data-video-url="https://www.youtube.com/watch?v=p1JPKLa-Ofc">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                     </li>
                    <!-- <li class="track-duration">(5:23)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4057" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4057" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="4" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/bda/04-nao_lhe_solto_mais.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        N  o Lhe Solto Mais
                       </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
<!--                     <button data-video-url="https://www.youtube.com/watch?v=C7E02fzfnXs">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                        </li>
                           <!--  <li class="track-duration">(5:09)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4061" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4061" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="5" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/bda/05-me_da_meu_coracao.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Me D   Meu Cora    o
                         </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
     <!--                <button data-video-url="https://www.youtube.com/watch?v=FxcUxV8urJ8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:48)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4062" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4062" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="6" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/bda/06-oferendar.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Oferendar
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
      <!--               <button data-video-url="https://www.youtube.com/watch?v=pZ12_E5R3qc&amp;list=UU9zX2xZIJ4cnwRsgBpHGvMg">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(5:19)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4064" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4064" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="7" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/bda/07-e_so_voce_querer.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        E S   Vo     Querer
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
          <!--           <button data-video-url="https://www.youtube.com/watch?v=iqdbdQ6etso">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:04)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4068" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4068" data-preview-type="lyrics">Letras</a></li>
       </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="8" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/bda/08-recado.mp3') }} ">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Recado
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="https://www.youtube.com/watch?v=iT56VtNSeR8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(6:31)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4069" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4069" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="9" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/bda/09-destar.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        D'estar
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
               <!--      <button data-video-url="https://www.youtube.com/watch?v=3IeOmXZ95i8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(6:18)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4074" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4074" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="10" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/bda/10-ilusao_nada_mais.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Ilus  o Nada Mais
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
              <!--       <button data-video-url="https://www.youtube.com/watch?v=3xUfCUFPL-8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:35)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4075" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4075" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="11" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/bda/11-se_tu_quiser.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Se Tu Quiser
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                            <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
               <!--      <button data-video-url="https://www.youtube.com/watch?v=AAy9NO7yk0s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(4:10)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4087" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4087" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                         <button class="trigger-track-preview" data-track-id="12" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/bda/12-seu_aconchego.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Seu Aconchego
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="https://www.youtube.com/watch?v=Pe2uVbLltQs">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(4:36)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4129" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4129" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="13" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/bda/13-bebedouro.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Bebedouro
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
         <!--            <button data-video-url="https://www.youtube.com/watch?v=gogfeVUtK3s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:50)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4136" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4136" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="14" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/bda/14-quem_e_voce.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Quem    Vo    
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
                      <!-- <button data-video-url="https://www.youtube.com/watch?v=34xCpMRF92o">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                            </button> -->
                            </li>
                           <!--  <li class="track-duration">(4:26)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4141" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4141" data-preview-type="lyrics">Letras</a></li>

                    </ul>
                </div>
            </li>            
        </ul>
    </div>
</article>


 <article class="album-tracks-item">
    <h2>QUAL O ASSUNTO QUE MAIS LHE INTERESSA (2007)</h2>
    <div class="album-tracks-col-left">
        <div class="post-thumb">
            <img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/capaAssunto.jpg') }}" alt="Qual o Assunto que Mais Lhe Interessa" />        </div>
                    <div class="album-purchase-links">
                <ul>
                    <li><a href="#" target="_blank">Comprar</a></li>                </ul>
            </div>
            </div>
            <div class="album-tracks-col-right">
            <ul>
                <li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="1" data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas/qami/01-gaiola_da_saudadade.mp3')}}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Gaiola Da Saudade
                        </button>
           </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="http://www.youtube.com/watch?v=LXXQLa-5n5w">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                         <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                        </li>
                 <!--        <li class="track-duration">(4:18)</li> -->

                        <li class="track-credits"><a href="#" data-post-id="3720" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="3720" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="2" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/02-ave_anjos_angeli.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Aves Anjo Angeli
                      </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
 <!--                    <button data-video-url="https://www.youtube.com/watch?v=YCnzlPG3_oU">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                        <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                    </li>
                   <!--  <li class="track-duration">(6:09)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4056" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4056" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="3" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/03-noite_severina.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Noite Severina
                       </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
       <!--              <button data-video-url="https://www.youtube.com/watch?v=p1JPKLa-Ofc">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                     </li>
                    <!-- <li class="track-duration">(5:23)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4057" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4057" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="4" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/04-rua_da_passagem.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Rua Da Passagem
                       </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
<!--                     <button data-video-url="https://www.youtube.com/watch?v=C7E02fzfnXs">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(5:09)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4061" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4061" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="5" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/05-tempos_quase_modernos.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Tempos Quase Modernos
                         </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
     <!--                <button data-video-url="https://www.youtube.com/watch?v=FxcUxV8urJ8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:48)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4062" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4062" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="6" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/06-a_natureza_das_coisas.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        A Natureza Das Coisas
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
      <!--               <button data-video-url="https://www.youtube.com/watch?v=pZ12_E5R3qc&amp;list=UU9zX2xZIJ4cnwRsgBpHGvMg">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                        </li>
                            <!-- <li class="track-duration">(5:19)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4064" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4064" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="7" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/07-argila.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Argila
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
          <!--           <button data-video-url="https://www.youtube.com/watch?v=iqdbdQ6etso">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:04)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4068" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4068" data-preview-type="lyrics">Letras</a></li>
       </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="8" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/qami/08-boi_cavalo_de_troia.mp3') }} ">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Boi Cavalo De Tr  ia
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="https://www.youtube.com/watch?v=iT56VtNSeR8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(6:31)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4069" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4069" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="9" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/qami/09-ultimo_minuto.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                          ltimo Minuto
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
               <!--      <button data-video-url="https://www.youtube.com/watch?v=3IeOmXZ95i8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(6:18)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4074" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4074" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="10" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/10-a_danca_das_borboletas.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        A Dan  a Das Borboletas
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
              <!--       <button data-video-url="https://www.youtube.com/watch?v=3xUfCUFPL-8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:35)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4075" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4075" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="11" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/qami/11-as_forcas_da_natureza.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        AS For  as Da Natureza
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
               <!--      <button data-video-url="https://www.youtube.com/watch?v=AAy9NO7yk0s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(4:10)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4087" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4087" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                         <button class="trigger-track-preview" data-track-id="12" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/12-dois_pra_sempre.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Dois Pra Sempre
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="https://www.youtube.com/watch?v=Pe2uVbLltQs">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(4:36)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4129" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4129" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="13" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/13-os_beijos.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Os Beijos
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
         <!--            <button data-video-url="https://www.youtube.com/watch?v=gogfeVUtK3s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:50)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4136" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4136" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="13" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/14-novena.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Novena
                        </button>
            </li>
        </ul>
    </div>
   <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
         <!--            <button data-video-url="https://www.youtube.com/watch?v=gogfeVUtK3s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                        </li>
                            <!-- <li class="track-duration">(3:50)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4136" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4136" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li>
<li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="13" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/15-conceicao_dos_coqueiros.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Concei    o Dos Coqueiros
                        </button>
                                        </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                            <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
         <!--            <button data-video-url="https://www.youtube.com/watch?v=gogfeVUtK3s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:50)</li> -->
                                        <li class="track-credits"><a href="#" data-post-id="4136" data-preview-type="credits">Cr  ditos</a></li>
                                        <li class="track-lyrics"><a href="#" data-post-id="4136" data-preview-type="lyrics">Letras</a></li>
                    </ul>
    </div>
</li>
<li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="14" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/qami/16-amplidao.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Amplid  o
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
                      <!-- <button data-video-url="https://www.youtube.com/watch?v=34xCpMRF92o">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                            </button> -->
                            </li>
                           <!--  <li class="track-duration">(4:26)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4141" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4141" data-preview-type="lyrics">Letras</a></li>
                </ul>
            </div>
        </li>            
    </ul>
</div>
</article>




<article class="album-tracks-item">
    <h2>ELBA E DOMINGUINHOS (2005)</h2>
    <div class="album-tracks-col-left">
        <div class="post-thumb">
            <img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/capaElbaDominguinhos.jpg') }}" alt="Elba e Dominguinhos" />        </div>
                    <div class="album-purchase-links">
                <ul>
                    <li><a href="#" target="_blank">Comprar</a></li>                </ul>
            </div>
            </div>
            <div class="album-tracks-col-right">
            <ul>
                <li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="1" data-track-url="{{URL::to(Config::get('caminho.server_public').'musicas/ebdom/01-rio_de_sonhos.mp3')}}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Rio De Sonho
                        </button>
           </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="http://www.youtube.com/watch?v=LXXQLa-5n5w">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                         <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                        </li>
                 <!--        <li class="track-duration">(4:18)</li> -->

                        <li class="track-credits"><a href="#" data-post-id="3720" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="3720" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="2" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/ebdom/02-tenho_sede.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Tenho Sede                   
                      </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
 <!--                    <button data-video-url="https://www.youtube.com/watch?v=YCnzlPG3_oU">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play.svg') }}" alt="Play Video"></span>
                        <span class="icon-close"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-close.svg') }}" alt="Play Video"></span>
                    </button> -->
                    </li>
                   <!--  <li class="track-duration">(6:09)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4056" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4056" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="3" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/ebdom/03-lamento_sertanejo.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Lamento Sertanejo
                       </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
       <!--              <button data-video-url="https://www.youtube.com/watch?v=p1JPKLa-Ofc">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                     </li>
                    <!-- <li class="track-duration">(5:23)</li> -->
                    <li class="track-credits"><a href="#" data-post-id="4057" data-preview-type="credits">Cr  ditos</a></li>
                    <li class="track-lyrics"><a href="#" data-post-id="4057" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="4" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/ebdom/04-eu_so_quero_um_xodo.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Eu S   Quero Um Xod  
                       </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
<!--                     <button data-video-url="https://www.youtube.com/watch?v=C7E02fzfnXs">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(5:09)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4061" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4061" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="5" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/ebdom/05-vem_ficar_comigo.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Vem Ficar Comigo
                         </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
     <!--                <button data-video-url="https://www.youtube.com/watch?v=FxcUxV8urJ8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:48)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4062" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4062" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="6" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/ebdom/06-onde_esta_voce.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Onde Esta Vo    
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
      <!--               <button data-video-url="https://www.youtube.com/watch?v=pZ12_E5R3qc&amp;list=UU9zX2xZIJ4cnwRsgBpHGvMg">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                        </li>
                            <!-- <li class="track-duration">(5:19)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4064" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4064" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="7" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/ebdom/07-retrato_da_vida.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Retrato Da Vida
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
          <!--           <button data-video-url="https://www.youtube.com/watch?v=iqdbdQ6etso">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:04)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4068" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4068" data-preview-type="lyrics">Letras</a></li>
       </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="8" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/ebdom/08-chama.mp3') }} ">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Chama
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="https://www.youtube.com/watch?v=iT56VtNSeR8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(6:31)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4069" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4069" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="9" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/ebdom/09-xote_de_navegacao.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Xote De Navega    o
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
               <!--      <button data-video-url="https://www.youtube.com/watch?v=3IeOmXZ95i8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(6:18)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4074" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4074" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="10" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/ebdom/10-gostoso_demais.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Gostoso Demais
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
              <!--       <button data-video-url="https://www.youtube.com/watch?v=3xUfCUFPL-8">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:35)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4075" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4075" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="11" data-track-url="{{  URL::to(Config::get('caminho.server_public').'musicas/ebdom/11-forrozinho_bom.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Forrozinho Bom
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
               <!--      <button data-video-url="https://www.youtube.com/watch?v=AAy9NO7yk0s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(4:10)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4087" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4087" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                         <button class="trigger-track-preview" data-track-id="12" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/ebdom/12-de_volta_pro_aconchego.mp3')  }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        De Volta Pro Aconchego
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
            <!--         <button data-video-url="https://www.youtube.com/watch?v=Pe2uVbLltQs">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                           <!--  <li class="track-duration">(4:36)</li> -->
                            <li class="track-credits"><a href="#" data-post-id="4129" data-preview-type="credits">Cr  ditos</a></li>
                            <li class="track-lyrics"><a href="#" data-post-id="4129" data-preview-type="lyrics">Letras</a></li>
        </ul>
    </div>
</li><li class="track-listing-item">
    <div class="stream-controls">
        <ul>
            <li>
                        <button class="trigger-track-preview" data-track-id="14" data-track-url="{{ URL::to(Config::get('caminho.server_public').'musicas/ebdom/13-pedras_que_cantam--isso_aqui_t  _bom_demais.mp3') }}">
                        <span class="icon-play"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-play-black.svg') }}" alt="Play Track"></span>
                        <span class="icon-pause"><img src="{{ URL::to(Config::get('caminho.server_public').'img/elba/icon-pause.svg') }}" alt="Pause Track"></span>
                        Pedras Que Cantam // Isso Aqui T   Bom demais
                        </button>
            </li>
        </ul>
    </div>
    <div class="track-meta">
        <ul>
                        <li class="purchase-track"><a href="#" target="_blank">Buy</a></li>
                        <li class="play-associated-video">
         <!--            <button data-video-url="https://www.youtube.com/watch?v=gogfeVUtK3s">
                        <span class="icon-play"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-play.svg" alt="Play Video"></span>
                        <span class="icon-close"><img src="http://static.parkwoodent.netdna-cdn.com/wp-content/themes/beyonce_2014/assets/images/icon-close.svg" alt="Play Video"></span>
                    </button> -->
                            </li>
                            <!-- <li class="track-duration">(3:50)</li> -->
                        <li class="track-credits"><a href="#" data-post-id="4136" data-preview-type="credits">Cr  ditos</a></li>
                        <li class="track-lyrics"><a href="#" data-post-id="4136" data-preview-type="lyrics">Letras</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</article>

</div>

</section>



@stop

